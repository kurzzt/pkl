<?php

namespace App\Http\Controllers;

use App\Charts\DashboardChart;
use App\Models\Rusunawa;
use App\Models\Retribution;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(DashboardChart $chart){
        return view('admin.dashboard', [
            'totalRusun' => $this->totalRusun(),
            'totalRetribution' => $this->totalRetribution(),
            'totalUser' => $this->totalUser(),
            'chart' => $chart->retribution(),
        ]);
    }

    public function totalRusun(){
        $res = Rusunawa::count();
        return $res;
    }

    public function totalRetribution(){
        $res = Retribution::count();
        return $res;
    }

    public function totalUser(){
        $res = User::count();
        return $res;
    }
}
