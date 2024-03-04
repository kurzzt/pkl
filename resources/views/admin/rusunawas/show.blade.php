@extends('components.admin-sidebar')

@section('title', 'Rusunawa Info - Dashboard')
@section('sub-title', 'Rusunawa Info')
@section('body')

<div class="">
    <div class="flex flex-col space-y-4">
      <div>Name: {{$rusunawa->name}}</div>
      <div>Username: {{$rusunawa->subname}}</div>
      <div>Lantai: {{$rusunawa->lantai}}</div>
      <div>Tipe: {{$rusunawa->tipe}}</div>
      <div>Tarif Retribusi: {{$rusunawa->fare}}</div>
      <div>Satuan: {{$rusunawa->unit}}</div>
      <div>Created At: {{$rusunawa->created_at}}</div>
      <div>Updated At: {{$rusunawa->updated_at}}</div>
    </div>

    <div class="h-[30px]"></div>

    <a class="btn btn-ghost btn-outline w-full my-5" href="{{ route('rusunawas.index')}}">Back</a>
</div>

@endsection