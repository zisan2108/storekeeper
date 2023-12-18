<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function getSalesFigures()
    {
        $salesToday = DB::table('sales')
            ->whereDate('created_at', now()->format('Y-m-d'))
            ->sum('amount');

        $salesYesterday = DB::table('sales')
            ->whereDate('created_at', now()->subDay()->format('Y-m-d'))
            ->sum('amount');

        $salesThisMonth = DB::table('sales')
            ->whereYear('created_at', now()->format('Y'))
            ->whereMonth('created_at', now()->format('m'))
            ->sum('amount');

        $salesLastMonth = DB::table('sales')
            ->whereYear('created_at', now()->subMonth()->format('Y'))
            ->whereMonth('created_at', now()->subMonth()->format('m'))
            ->sum('amount');

        return view('dashboard', compact('salesToday', 'salesYesterday', 'salesThisMonth', 'salesLastMonth'));
    }
}
