<?php

namespace App\Http\Controllers;

use App\Models\Rusunawa;
use Illuminate\Http\Request;
use App\Http\Controllers\RetributionController;

class HomeController extends Controller
{
    public function service(){
        $rusunawas = Rusunawa::all();
        return view('home.service', ['rusunawas' => $rusunawas]);
    }

    public function store(Request $request){
        $request['uploader_type'] = 'guest';
        $newData = (new RetributionController)->storeReq($request);
        return redirect(route('home.service'))->with('success', 'Pengajuan berhasil dikirim');
    }
}