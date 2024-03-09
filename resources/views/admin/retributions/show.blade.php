@extends('components.admin-sidebar')

@section('title', 'Retribution Info - Dashboard')
@section('sub-title', 'Retribution Info')
@section('body')

<div class="">
    <div class="flex flex-col space-y-4">
      <div>Rusunawa: {{$retribution->rusunawa_id}}</div>
      <div>Uploader: {{$retribution->uploader_id}}</div>
      <div>File: 
        <span>
          <img class="w-[100px] rounded" src="{{$retribution->file}}" alt="Doc File">
        </span>  
      </div>
      <div>Status: 
        <span @class([ 'badge', 'badge-success' => $retribution->status, 'badge-error' => ! $retribution->status ])>{{ $retribution->status ? 'Verified' : 'Unverfied' }}</span>
      </div>
      <div>Created At: {{$retribution->created_at}}</div>
      <div>Updated At: {{$retribution->updated_at}}</div>
    </div>

    <div class="h-[30px]"></div>

    <a class="btn btn-ghost btn-outline w-full my-5" href="{{ route('retributions.index')}}">Back</a>
</div>

@endsection