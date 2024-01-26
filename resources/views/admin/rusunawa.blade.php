@extends('components.admin-sidebar')
@section('title', 'Rusunawa - Admin Dashboard')
@section('sub-title', 'Rusunawa')
@section('body')

<div class="flex space-x-5">
  <input type="text" placeholder="Search rusunawa..." class="input input-bordered w-full" />
  <button class="btn btn-primary">
    <span class="material-symbols-outlined">add</span>
    Tambah
  </button>
</div>

@endsection