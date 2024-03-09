<?php

namespace App\Http\Controllers;

use App\Models\Retribution;
use App\Models\Rusunawa;
use Illuminate\Http\Request;

class RetributionController extends Controller
{
    public function index(){
        $retributions = Retribution::all();
        return view('admin.retributions.list', ['retributions' => $retributions]);
    }

    public function create(){
        $rusunawas = Rusunawa::all();
        return view('admin.retributions.create', ['rusunawas' => $rusunawas]);
    }

    public function store(Request $request){
        dd($request);

        // $data = $request->validate([
        //     'rusunawa' => 'required|string',
        //     'nominal' => 'required|integer',
        //     'file' => 'required'
        // ]);
    }

    public function show(Retribution $retribution){
        return view('admin.retributions.show', ['retribution' => $retribution]);
    }
}
