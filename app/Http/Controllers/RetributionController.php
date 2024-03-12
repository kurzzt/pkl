<?php

namespace App\Http\Controllers;

use App\Models\Retribution;
use App\Models\Rusunawa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Uploader;

class RetributionController extends Controller
{
    public function index(){
        // kinda ugly code yg penting kelar for now wkwkw
        $search = request('search');
        $retributions = Retribution::join('users', 'retributions.uploader_id', '=', 'users.id')
            ->join('rusunawas', 'retributions.rusunawa_id', '=', 'rusunawas.id')
            ->select('users.email','rusunawas.name','rusunawas.subname', 'rusunawas.lantai', 'retributions.*');
        
            if ($search) {
            $retributions = $retributions->where(function ($query) use ($search) {
                $query->where('rusunawas.name', 'like', '%'.$search.'%')
                    ->orWhere('rusunawas.subname', 'like', '%'.$search.'%');
            });
        }
        $retributions = $retributions->paginate(5);
        return view('admin.retributions.list', ['retributions' => $retributions]);
    }

    public function create(){
        $rusunawas = Rusunawa::all();
        return view('admin.retributions.create', ['rusunawas' => $rusunawas]);
    }

    public function storeReq(Request $request){
        $this->validate($request, [
            'rusunawa_id' => 'required|string',
            'nominal' => 'required|integer',
            'file' => 'required|string',
            'uploader_type' => ['required', Rule::in(['admin', 'guest'])],
            'payment_of' => [
                'required',
                'date',
                function ($attribute, $value, $fail) use ($request) {
                    $monthYear = date('Y-m', strtotime($value));
                    $existingRetribution = Retribution::where('rusunawa_id', $request->rusunawa_id)
                                                        ->whereRaw("DATE_FORMAT(payment_of, '%Y-%m') = ?", [$monthYear])
                                                        ->exists();
                    if ($existingRetribution) {
                        $fail("The payment for this month and year already uploaded.");
                    }
                },
            ],
            'name' => 'sometimes|required|string',
            'email' => 'sometimes|required|email'
        ]);

        if($request->uploader_type == 'admin'){
            $uploader_id = auth()->user()->id;
        } else {
            $uploader = Uploader::create([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            $uploader_id = $uploader->id;
        }

        $data = [
            'rusunawa_id' => $request->rusunawa_id,
            'uploader_id' => $uploader_id,
            'uploader_type' => $request->uploader_type,
            'payment_of' => $request->payment_of,
            'nominal' => $request->nominal,
            'file' => $request->file,
        ];

        $newRetribution = Retribution::create($data);
        return $newRetribution;
    }

    public function store(Request $request){
        $newRetribution = $this->storeReq($request);

        $activityLog = new UserController;
        $activityLog->userAction(auth()->user()->id, 'User create retribution data with id '. $newRetribution->id);
        
        return redirect(route('retributions.index'));
    }

    public function show(Retribution $retribution){
        if( $retribution->uploader_type == 'admin'){
            $uploader = User::find($retribution->uploader_id);
        } else {
            $uploader = Uploader::find($retribution->uploader_id);
        };

        $rusunawa = Rusunawa::find($retribution->rusunawa_id);

        return view('admin.retributions.show', [
            'uploader' => $uploader,
            'retribution' => $retribution,
            'rusunawa' => $rusunawa
        ]);
    }

    public function edit(Retribution $retribution){
        $rusunawas = Rusunawa::all();
        if( $retribution->uploader_type == 'admin'){
            $uploader = User::find($retribution->uploader_id);
        } else {
            $uploader = Uploader::find($retribution->uploader_id);
        };
        
        return view('admin.retributions.edit', [
            'retribution' => $retribution,
            'uploader' => $uploader,
            'rusunawas' => $rusunawas
        ]);
    }

    public function update(Retribution $retribution, Request $request){
        $data = $this->validate($request, [
            'rusunawa_id' => 'required|string',
            'nominal' => 'required|integer',
            'file' => 'required|string',
            'uploader_type' => ['optional', Rule::in(['admin', 'guest'])],
            'uploader_id' => 'optional|string',
            'payment_of' => [
                'required',
                'date',
                Rule::unique('retributions')->ignore($retribution->id)->where(function ($query) use ($request) {
                    $monthYear = date('Y-m', strtotime($request->payment_of));
                    $query->where('rusunawa_id', $request->rusunawa_id)
                          ->whereRaw("DATE_FORMAT(payment_of, '%Y-%m') = ?", [$monthYear]);
                }),
            ],
            'status' => ['required', Rule::in(['Verified', 'Unverified'])],
        ]);
        $retribution->update($data);

        $activityLog = new UserController;
        $activityLog->userAction(auth()->user()->id, 'User edit retribution data with id '. $retribution->id);
        
        return redirect(route('retributions.index'))->with('success', 'Retribution Updated Succesfully');
    }

    public function destroy(Retribution $retribution){
        $retribution->delete();
        
        $activityLog = new UserController;
        $activityLog->userAction(auth()->user()->id, 'User delete retribution data with id '. $retribution->id);
        
        return redirect(route('retributions.index'))->with('success', 'Retribution deleted Succesffully');
    }
}
