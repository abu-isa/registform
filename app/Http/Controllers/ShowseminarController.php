<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Seminar;
use Carbon\Carbon;
use App\Http\Requests;

class ShowseminarController extends Controller
{
    public function show(){
    	$currentDay = date('d');
    	$currentMonth = date('m');
        $dateDay = date('Y-m-d');
        $data = DB::table('seminars')->select('judul','tanggal','id')->where('tanggal','>',$dateDay)->where('status','1')->orderBy('tanggal', 'asc')->get();
        return view('daftarseminar',['data' => $data]);
    }

    public function showsuccess(Request $request, $id){
        DB::update('update forms set status_pembayaran=? where id = ?',['success',$id]);

        $form = DB::table('forms')->where('id',$id)->get();
        $data = DB::table('seminars')->where('id',$form[0]->pilihan)->get();
        session()->flash('notifsuccess','Pembayaran telah diterima, terimakasih!');
        return view('ringkasanpembayaran',['data' => $data,'form'=>$form]);
    }

    public function showpending(Request $request, $id){
        DB::update('update forms set status_pembayaran=? where id = ?',['pending',$id]);

        $form = DB::table('forms')->where('id',$id)->get();
        $data = DB::table('seminars')->where('id',$form[0]->pilihan)->get();
        session()->flash('notifpending','Pembayaran belum diterima, segera selesaikan pembayaran!');
        return view('ringkasanpembayaran',['data' => $data,'form'=>$form]);
    }

    public function showhome(){
        $currentDay = date('d');
        $currentMonth = date('m');
        $dateDay = date('Y-m-d');
        $data = DB::table('seminars')->select('judul','tanggal','id','images')->where('tanggal','>',$dateDay)->where('status','1')->orderBy('tanggal', 'asc')->get();
        return view('halamandepan',['data' => $data]);
    }
}
