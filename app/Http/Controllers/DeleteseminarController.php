<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class DeleteseminarController extends Controller
{
	public function show(){
    	$currentDay = date('d');
    	$currentMonth = date('m');

        $data = DB::table('seminar')->select('id','judul','tanggal')->whereDay('tanggal','>',$currentDay)->whereMonth('tanggal','=',$currentMonth)->where('status','1')->get();
        return view('delete',['data' => $data]);
	}

    public function destroy($id) {
		DB::update('update seminar set status = ? where id = ?',['3',$id]);
		return redirect()->back()->with('alert', 'Data has been deleted!');
	}
}
