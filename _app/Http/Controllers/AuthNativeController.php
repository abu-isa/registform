<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class AuthNativeController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function auth(Request $req){
        $email = $req->email;
        $pwd   = $req->password;
        if (Auth::attempt(['email' => $email, 'password' => $pwd])) {
            $name = Auth::user()->name;
            return view('admin.index', ['name' => $name]);
            // return "Hai ". Auth::user()->name;
        }else{
            return "Maaf email atau password yang anda masukan tidak sesuai.";
        }
    }
    public function logout(){
        Auth::logout();
        return view('admin.login');

    }
}
