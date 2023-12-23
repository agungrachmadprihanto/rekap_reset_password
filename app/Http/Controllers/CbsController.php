<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCbsRequest;
use App\Models\UpdateCbs;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CbsController extends Controller
{
    public function add()
    {
        $data = UpdateCbs::all();

        return view('pages.cbsupdate.add', ['data' => $data]);
    }

    public function post(UpdateCbsRequest $request)
    {
        $data = $request->all();
        $data['user'] = auth()->user()->name;

        UpdateCbs::create($data);

        $request->session()->flash('success', 'Data berhasil ditambahkan!');
        return redirect()->route('updatecbs.index');
    }

    public function cetak($id)
    {
        $data = UpdateCbs::findOrFail($id);

        // return view('pdf.laporanupdate', ['data' => $data]);

        $pdf = Pdf::loadview('pdf.laporanupdate', ['data'=> $data]);

        return $pdf->download('laporan-update-cbs');
    }

    

}
