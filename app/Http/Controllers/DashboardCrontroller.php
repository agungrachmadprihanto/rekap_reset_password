<?php

namespace App\Http\Controllers;

use App\Exports\PendingExport;
use App\Models\Denda;
use Illuminate\Http\Request;

class DashboardCrontroller extends Controller
{
    public function index()
    {
        $datas = Denda::count();
        $countPending = Denda::where('bayar','=','belum')->count();
        $countDone = Denda::where('bayar','=','lunas')->count();

        return view('home', ['all' => $datas, 'pending' => $countPending, 'done' => $countDone]);
    }

    public function pending()
    {
        return (new PendingExport)->download('rekap_pending_pembayaran.xlsx');
    }

    public function lunas()
    {
        return (new PendingExport)->download('rekap_lunas_pembayaran.xlsx');
    }

}
