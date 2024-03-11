@extends('components.admin-sidebar')

@section('title', 'Retribution Info - Dashboard')
@section('sub-title', 'Retribution Info')
@section('body')

<div class="">
  <div class="flex flex-col space-y-4">
    <table class="table table-zebra">
      <tr>
        <td>Rusunawa</td>
        <td>{{ $rusunawa->name }} - {{ $rusunawa->subname }}</td>
      </tr>
      <tr>
        <td>Rusunawa Lantai</td>
        <td>{{ $rusunawa->lantai }}</td>
      </tr>
      <tr>
        <td>Nama Uploader</td>
        <td>{{ $uploader->name }}</td>
      </tr>
      <tr>
        <td>Email Uploader</td>
        <td>{{ $uploader->email }}</td>
      </tr>
      <tr>
        <td>Nominal</td>
        <td>Rp {{$retribution->nominal}}</td>
      </tr>
      <tr>
        <td>File</td>
        <td>
          <a href={{ $retribution->file }} target='_blank'>
            <img class="w-[100px] rounded" src="{{$retribution->file}}" alt="Doc File">
          </a>
        </td>
      </tr>
      <tr>
        <td>Status</td>
        <td>
          <span @class([ 
            'badge', 
            'badge-success' => $retribution->status == 'Verified', 
            'badge-error' => $retribution->status == 'Unverified'
          ])>
            {{ $retribution->status }}
          </span>
        </td>
      </tr>
      <tr>
        <td>Pembayaran Bulan</td>
        <td>{{$retribution->payment_of}}</td>
      </tr>
      <tr>
        <td>Created At</td>
        <td>{{$retribution->created_at}}</td>
      </tr>
      <tr>
        <td>Updated At</td>
        <td>{{$retribution->updated_at}}</td>
      </tr>
    </table>
  </div>

  <div class="h-[30px]"></div>
  
  <a class="btn btn-ghost btn-outline w-full my-5" href="{{ route('retributions.index')}}">Back</a>
</div>

@endsection