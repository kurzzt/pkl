@extends('components.admin-sidebar')

@section('title', 'Retribution - Dashboard')
@section('sub-title', 'Retribution')
@section('body')

<div class="flex space-x-5">
  <input type="text" placeholder="Search retribution..." class="input input-bordered w-full" />
  <button class="btn btn-primary">
    <span class="material-symbols-outlined">add</span>
    Tambah
  </button>
</div>


@endsection