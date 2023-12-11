<?php

namespace App\Http\Controllers;

use App\DataTables\DendaDataTable;
use App\Exports\RekapExport;
use App\Http\Requests\BayarRequest;
use App\Models\Denda;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class RekapController extends Controller
{
    public function index()
    {
        $data = Denda::orderBy('created_at', 'DESC')->paginate(15);

        return view('pages.rekap.index', ['data' => $data]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->table_search;
    
        // mengambil data dari table sesuai pencarian data
        $data = Denda::where('name', 'like',"%" . $cari . "%")->paginate();

        // mengirim data ke view index
        return view('pages.rekap.index',['data' => $data]);
    }

    public function update(Request $request, $id)
    {
       $data = $request->all();

       Denda::findOrFail($id)->update($data);
    
        return redirect()->route('rekap.index');
    }

    public function export()
    {

        return Excel::download(new RekapExport, 'rekap_denda.xlsx');
    }

}
