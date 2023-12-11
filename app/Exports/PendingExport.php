<?php

namespace App\Exports;

use App\Models\Denda;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class PendingExport implements FromQuery
{
    use Exportable;

    public function query()
    {
        return Denda::query()->where('bayar','=','belum');
    }
}
