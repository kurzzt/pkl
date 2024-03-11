<?php

namespace App\Http\Controllers;

use App\Models\Retribution;
use App\Models\Rusunawa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RetributionController extends Controller
{
    public function index(){
        $retributions = Retribution::join('users', 'retributions.uploader_id', '=', 'users.id')
            ->join('rusunawas', 'retributions.rusunawa_id', '=', 'rusunawas.id')
            ->select('users.email','rusunawas.name','rusunawas.subname', 'retributions.*');

        $retributions = $retributions->paginate(5);
        return view('admin.retributions.list', ['retributions' => $retributions]);
    }

    public function create(){
        $rusunawas = Rusunawa::all();
        return view('admin.retributions.create', ['rusunawas' => $rusunawas]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'rusunawa' => 'required|string',
            'nominal' => 'required|integer',
            'file' => 'required|string',
            'uploader_type' => ['required', Rule::in(['admin', 'guest'])],
            'payment_of' => [
                'required',
                'date',
                function ($attribute, $value, $fail) use ($request) {
                    $monthYear = date('Y-m', strtotime($value));
                    $existingRetribution = Retribution::where('rusunawa_id', $request->rusunawa)
                                                        ->whereRaw("DATE_FORMAT(payment_of, '%Y-%m') = ?", [$monthYear])
                                                        ->exists();
                    if ($existingRetribution) {
                        $fail("The payment for this month and year already exists for the selected rusunawa.");
                    }
                },
            ]
        ]);
        
        if($request->uploader_type == 'admin'){
            $uploader_id = auth()->user()->id;
        } else {
            // Upload uploader info ke model Uploader, ambil idnya, 
            // taruh di uploader_id
        }
        

        $data = [
            'rusunawa_id' => $request->rusunawa,
            'uploader_id' => $uploader_id,
            'uploader_type' => $request->uploader_type,
            'payment_of' => $request->payment_of,
            'nominal' => $request->nominal,
            'file' => $request->file,
        ];

        $newRetribution = Retribution::create($data);
        return redirect(route('retributions.index'));
    }

    public function show(Retribution $retribution){
        return view('admin.retributions.show', ['retribution' => $retribution]);
    }
}
