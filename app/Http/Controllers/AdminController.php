<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Seminar;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function home()
    {
        $data = DB::table('forms')
            ->join('seminars', 'seminars.id', '=', 'forms.pilihan')
            ->select('*')
            ->get();
        return view('admin.index', ['data' => $data]);
    }
    
    public function auth(Request $req){
        $email = $req->email;
        $pwd   = $req->password;
        
        if (Auth::attempt(['email' => $email, 'password' => $pwd])) {
            return redirect('/admin/home');
        }else{
            return "Maaf email atau password yang anda masukan tidak sesuai.";
        }
    }
    
    public function logout(){
        Auth::logout();
        return view('admin.login');

    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
