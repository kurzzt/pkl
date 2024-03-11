@extends('components.admin-sidebar')

@section('title', 'Rusunawa Info - Dashboard')
@section('sub-title', 'Rusunawa Info')
@section('body')

<div class="">
  <table class="table table-zebra">
    <tr>
      <td>Name</td>
      <td>{{$rusunawa->name}}</td>
    </tr>
    <tr>
      <td>Username</td>
      <td>{{$rusunawa->subname}}</td>
    </tr>
    <tr>
      <td>Lantai</td>
      <td>{{$rusunawa->lantai}}</td>
    </tr>
    <tr>
      <td>Tipe</td>
      <td>{{$rusunawa->tipe}}</td>
    </tr>
    <tr>
      <td>Tarif Retribusi</td>
      <td>Rp {{$rusunawa->fare}}</td>
    </tr>
    <tr>
      <td>Satuan</td>
      <td>{{$rusunawa->unit}}</td>
    </tr>
    <tr>
      <td>Created At</td>
      <td>{{$rusunawa->created_at}}</td>
    </tr>
    <tr>
      <td>Updated At</td>
      <td>{{$rusunawa->updated_at}}</td>
    </tr>
  </table>

  <div class="h-[30px]"></div>

  <a class="btn btn-ghost btn-outline w-full my-5" href="{{ route('rusunawas.index')}}">Back</a>
</div>

@endsection