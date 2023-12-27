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

        return view('pages.denda.index', ['data' => $data]);
    }

    public function add(DendaRequest $request)
    {
        $data = $request->all();

        Denda::create($data);

        $request->session()->flash('success', 'Data berhasil ditambahkan!');
        return redirect()->route('denda.index');
    }

    public function edit($id)
    {
        $data = Denda::findOrFail($id);

        return view('pages.denda.edit', ['data' => $data]);
    }

    public function update(DendaRequest $request, $id)
    {        
        $data = $request->all();
    
        Denda::findOrFail($id)->update($data);

        return redirect()->route('denda.index');        
    }

    public function delete($id)
    {
        Denda::findOrFail($id)->delete();

        return redirect()->route('denda.index');
    }

}
