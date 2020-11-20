<?php

namespace App\Http\Controllers;

use App\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // $seminar = DB::table('seminar')->get();
        $seminar = Seminar::all();
        
        return view('admin.seminar.list_seminar', ['seminar' => $seminar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seminar.add_seminar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'judul' => 'required',
        //     'tanggal' => 'required',
        //     'harga' => 'required',
        //     'status' => '1'          
        // ]);
        $currentDay = date('d');
        if($currentDay>$request->tanggal){
            return redirect()->back()->with('alert', 'Tanggal yang dimasukan sudah lewat!');
        }else{
            Seminar::create($request->all());
            return redirect('/listseminar')->with('success', 'Seminar berhasil dimasukan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.seminar.edit_seminar', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id::where('id', $id->id)
                ->update([
                    'judul'      => $request->judul,
                    'tanggal'      => $request->tanggal,
                    'harga'      => $request->harga,
                    'status'      => $request->status 
                ]);
        return redirect('/listseminar')->with('status', 'Data berhasil di rubah...!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Seminar::destroy($id->id);
        return redirect('/listseminar')->with('status', 'Data berhasil dihapus...!');
    }
}
