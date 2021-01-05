<?php

namespace App\Http\Controllers;

use App\Registration;
use App\Seminar;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class RegistrationController extends Controller
{
    public function index()
    {
        // $registration = DB::table('form')->get();
        $registration = Registration::all();        
        return view('admin.registration.registration', ['daftar' => $registration]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        $data = DB::table('forms')
            ->join('seminars', 'seminars.id', '=', 'forms.pilihan')
            ->select('*')
            ->where('forms.id', $id)
            ->get();    

        // $datas = (object) $data;       array to object 
        return view('admin.registration.detail_registration', ['data' => $data]);
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
