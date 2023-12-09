<?php

namespace App\Http\Controllers;

use App\Http\Requests\DendaRequest;
use App\Models\Denda;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon as SupportCarbon;

class DendaController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function add(DendaRequest $request)
    {
        $data = $request->all();
        // $data['date'] = Carbon::toDateTimeString();

        Denda::create($data);

        $request->session()->flash('success', 'Data berhasil ditambahkan!');
        return redirect()->route('denda.index');
    }

}
