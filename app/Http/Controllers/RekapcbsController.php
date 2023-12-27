<?php

namespace App\Http\Controllers;

use App\Exports\DownloadcbsExport;
use App\Exports\RekapcbsExport;
use App\Models\UpdateCbs;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RekapcbsController extends Controller
{
    public function index ()
    {
        $data = UpdateCbs::orderBy('created_at', 'DESC')->paginate(15);

        return view('pages.rekapcbs.index', ['data' => $data]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->table_search;
    
        // mengambil data dari table sesuai pencarian data
        $data = UpdateCbs::where('perihal', 'like',"%" . $cari . "%")->paginate();

        // mengirim data ke view index
        return view('pages.rekapcbs.index',['data' => $data]);
    }

    public function export()
    {
        return Excel::download(new RekapcbsExport, 'rekap_cbs.xlsx');
    }

    public function download()
    {
        return view('pages.rekapcbs.download');
    }

    public function excel(Request $request)
    {
        $from_date = $request->input('from');
        $to_date = $request->input('to');

        // dd($request);

        return Excel::download(new DownloadcbsExport($from_date, $to_date), 'rekap_cbs.xlsx');
    }


    
}
