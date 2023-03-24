<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Pqrs;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $pqrsadmin = Pqrs::select (DB::raw("COUNT(*) as count"))
        ->whereYear('fecha', date('Y'))
        ->groupBy(DB::raw("Month(fecha)"))
        ->pluck('count');

        $months =Pqrs::select (DB::raw("Month(fecha) as month"))
        ->whereYear('fecha', date('Y'))
        ->groupBy(DB::raw("Month(fecha)"))
        ->pluck('month');

        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($months as $index => $month)
        {
            $datas[$month] = $pqrsadmin[$index];
        }
        return view('chart', compact('datas'));
}
}
