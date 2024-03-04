@extends('components.admin-sidebar')

@section('title', 'Retributions - Dashboard')
@section('sub-title', 'Retributions')
@section('body')

<div class="flex space-x-5">
  <input type="text" placeholder="Search retributions..." class="input input-bordered w-full" />
  <a class="btn btn-primary" href="{{route('retributions.create')}}">
    <span class="material-symbols-outlined">add</span>
    Tambah
  </a>
</div>

<div>
  @if(session()->has('success'))
  <div>{{session('success')}}</div>
  @endif
</div>

<div class="overflow-x-auto">
  <table class="table">
    <thead>
      <tr>
        <th>Action</th>
        <th>Rusunawa</th>
        <th>Uploader</th>
        <th>Nominal</th>
        <th>File</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
      </tr>
    </thead>
    <tbody>
      
    </tbody>
  </table>
</div>


@endsection