<?php

namespace App\Http\Controllers;

use App\Models\Retribution;
use Illuminate\Http\Request;

class RetributionController extends Controller
{
    public function index(){
        $retributions = Retribution::all();
        return view('admin.retributions.list', ['retributions' => $retributions]);
    }

    public function create(){
        return view('admin.retributions.create');
    }

    public function store(){
        return view('admin.retributions.create');
    }
}
