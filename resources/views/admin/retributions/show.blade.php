@extends('components.admin-sidebar')

@section('title', 'Retribution Info - Dashboard')
@section('sub-title', 'Retribution Info')
@section('body')

<div class="">
    {{ $retribution}}
    
    <div class="h-[30px]"></div>
    
    <div class="flex flex-col space-y-4">
      <div>Rusunawa: xxx</div>
      <div>Nama Uploader: xx</div>
      <div>Email Uploader: xx</div>
      
      <div>Nominal: Rp {{$retribution->nominal}}</div>
      <div>File: 
        <span>
          <img class="w-[100px] rounded" src="{{$retribution->file}}" alt="Doc File">
        </span>  
      </div>
      <div>Status: 
        <span @class([ 
            'badge', 
            'badge-success' => $retribution->status == 'Verified', 
            'badge-error' => $retribution->status == 'Unverified'
          ])>
            {{ $retribution->status }}
        </span>
      </div>
      <div>Pembayaran Bulan: {{$retribution->payment_of}}</div>
      <div>Created At: {{$retribution->created_at}}</div>
      <div>Updated At: {{$retribution->updated_at}}</div>
    </div>

    <div class="h-[30px]"></div>

    <a class="btn btn-ghost btn-outline w-full my-5" href="{{ route('retributions.index')}}">Back</a>
</div>

@endsection