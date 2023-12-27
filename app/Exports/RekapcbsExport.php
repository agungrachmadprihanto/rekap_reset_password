<?php

namespace App\Exports;

use App\Models\UpdateCbs;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class RekapcbsExport implements FromView
{
    public function view(): View
    {
        return view('pages.rekapcbs.export.rekap',['cbs' => UpdateCbs::all()]);
    }
}
