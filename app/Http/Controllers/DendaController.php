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
        $data = Denda::orderBy('created_at', 'DESC')->paginate(10);

        return view('pages.index', ['data' => $data]);
    }

    public function add(DendaRequest $request)
    {
        $data = $request->all();

        Denda::create($data);

        $request->session()->flash('success', 'Data berhasil ditambahkan!');
        return redirect()->route('denda.index');
    }

    public function update(DendaRequest $request)
    {
        
    }

}
