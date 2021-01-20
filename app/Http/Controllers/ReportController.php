<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Seminar;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $data = DB::table('forms')
            ->join('seminars', 'seminars.id', '=', 'forms.pilihan')
            ->select('*')
            ->get();
        return view('admin.report.search_report', ['data' => $data]);
    }
    public function create()
    {
        $data = Report::all();
        return view('admin.report.search_report', ['report' => $data]);
    }
    public function store(Request $request)
    {
        $data = DB::table('forms')
            ->join('seminars', 'seminars.id', '=', 'forms.pilihan')
            ->select('*')
            ->where('forms.status_pembayaran', '=', $request->status_pembayaran)
            ->where('seminars.tanggal', '>=', $request->tanggal_awal)
            // ->where('seminars.tanggal', '<', $request->tanggal_akhir)
            ->get();
        if($request->status_pembayaran == ''){
            $data = DB::table('forms')
            ->join('seminars', 'seminars.id', '=', 'forms.pilihan')
            ->select('*')
            ->get();
        }else{
            $data = DB::table('forms')
            ->join('seminars', 'seminars.id', '=', 'forms.pilihan')
            ->select('*')
            ->where('forms.status_pembayaran', '=', $request->status_pembayaran)
            ->where('seminars.tanggal', '>=', $request->tanggal_awal)
            // ->where('seminars.tanggal', '<', $request->tanggal_akhir)
            ->get();
        }
        return view('admin.report.search_resultreport', ['data' => $data]);
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