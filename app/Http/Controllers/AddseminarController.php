<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
class AddseminarController extends Controller {

	public function addseminar(Request $request){
		$currentDay = date('d');
		$judul = $request->input('judul');
		$tanggal = $request->input('tanggal');
		$harga = $request->input('harga');
		$data = array("judul"=>$judul,"tanggal"=>date_create($tanggal),"harga"=>$harga,"status"=>'1');
		if($currentDay>$tanggal){
			return redirect()->back()->with('alert', 'Tanggal yang dimasukan sudah lewat!');
		}else{
			DB::table('seminar')->insert($data);
			return redirect()->back()->with('success', 'Seminar berhasil dimasukan!');
		}
	}
}