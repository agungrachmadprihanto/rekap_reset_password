<?php

namespace App\Http\Controllers;

use App\DataTables\DendaDataTable;
use App\Http\Requests\BayarRequest;
use App\Models\Denda;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RekapController extends Controller
{
    public function index()
    {
        $data = Denda::orderBy('created_at', 'DESC')->get();

        return view('pages.rekap.index', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = new Denda;
        $data->bayar = $request->bayar;
        $data->save();
        

        // Denda::findOrFail($id)->update($data);

        return redirect()->route('rekap.index');
    }

}
