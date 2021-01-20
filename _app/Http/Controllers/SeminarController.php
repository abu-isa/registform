<?php

namespace App\Http\Controllers;

use App\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Http\Requests;

class SeminarController extends Controller
{

    public function index()
    { 
        // $currentDay = date('Y-m-d');
        $seminar = Seminar::all();  
        
        // $seminar = Seminar::where('status', '>', 0)
            //    ->get();

        return view('admin.seminar.list_seminar', ['seminar' => $seminar]);
    }

    public function create()
    {
        return view('admin.seminar.add_seminar');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'judul' => 'required',
        //     'tanggal' => 'required',
        //     'harga' => 'required',
        //     'status' => '1'          
        // ]);



        $currentDay = date('Y-m-d');
        if($currentDay>$request->tanggal){
            return redirect()->back()->with('alert', 'Tanggal yang dimasukan sudah lewat!');
        }else{
            $data = $request->all();
            $photo = $request->file('photo')->getClientOriginalName();
            $destination = base_path() . '/public/uploads';
            $request->file('photo')->move($destination, $photo);

            $data['images'] = $photo;

            Seminar::create($data);
            return redirect('/listseminar')->with('success', 'Seminar berhasil dimasukan!');
        }
    }

    public function show($id)
    {
        $seminar = Seminar::find($id);
        return view('admin.seminar.show_seminar')->with('seminar', $seminar);
    }

    public function edit($id)
    {
        // $seminar = Seminar::where('id', $id)->first();
        // return view('admin.seminar.edit_seminar')->with('seminar', $seminar);


        $seminar = Seminar::find($id);
        // dd($seminar);
        return view('admin.seminar.edit_seminar', compact('seminar'));
    }
    
    public function update(Request $request)
    {
        $update = Seminar::where('id', $request->id)->first();
        $update->judul      = $request['judul'];
        $update->tanggal    = $request['tanggal'];
        $update->harga      = $request['harga'];
        $update->status     = $request['status'];

        if($request->file('images') == "")        {
            $update->images  = $update->images;
        }else{
            $file       = $request->file('images');
            $fileName   = $file->getClientOriginalName();
            $request->file('images')->move("uploads/", $fileName);
            $update->images = $fileName;
        }
        $update->update();
        return redirect('/listseminar')->with('status', 'Data berhasil di rubah...!');
    }

    public function destroy(Seminar $seminar)
    {        
        Seminar::destroy($seminar->id); 
        // $delete->delete();
        // Seminar::destroy($seminar->id);
        // DB::table('seminars')->where('id', '=', $seminar->id)->delete();
        return redirect('/listseminar')->with('status', 'Data berhasil dihapus...!');
    }
}
