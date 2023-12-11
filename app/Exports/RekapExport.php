<?php

namespace App\Exports;

use App\Models\Denda;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RekapExport implements FromView
{
    public function view(): View
    {
        return view('pages.rekap.export.rekap',['denda' => Denda::all()]);
    }
}
