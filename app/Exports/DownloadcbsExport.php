<?php

namespace App\Exports;

use App\Models\UpdateCbs;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
    use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DownloadcbsExport implements FromQuery
{
    use Exportable;

    protected $from_date;
    protected $to_date;

    function __construct($from_date, $to_date)
    {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }

    public function query()
    {
        $data = UpdateCbs::whereBetween('date',[$this->from_date, $this->to_date])->orderBy('id');

        return $data;
    }
}
