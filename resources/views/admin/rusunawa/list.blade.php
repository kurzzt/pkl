@extends('components.admin-sidebar')
@section('title', 'Rusunawa - Admin Dashboard')
@section('sub-title', 'Rusunawa')
@section('body')

<div class="flex space-x-5">
  <input type="text" placeholder="Search rusunawa..." class="input input-bordered w-full" />
  <a class="btn btn-primary" href="/rusunawa/create">
    <span class="material-symbols-outlined">add</span>
    Tambah
  </a>
</div>

<div class="overflow-x-auto">
  <table class="table">
    <thead>
      <tr>
        <th>Action</th>
        <th>Nama</th>
        <th>Tarif Retribusi</th>
        <th>Lantai</th>
        <th>Type</th>
        <th>Satuan</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-info"><span class="material-symbols-outlined">info</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-warning"><span class="material-symbols-outlined">edit</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-error"><span class="material-symbols-outlined">delete</span></a>
        </th>
        <th>Rumah Susun Plamongan Blok A sampai dengan Blok K</th>
        <th>Rp 120.000</th>
        <th>I</th>
        <th>27</th>
        <th>Per Bulan</th>
      </tr>

      <!-- row 2 -->
      <tr>
        <th>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-info"><span class="material-symbols-outlined">info</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-warning"><span class="material-symbols-outlined">edit</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-error"><span class="material-symbols-outlined">delete</span></a>
        </th>
        <th>Karangroto Blok C </th>
        <th>Rp 90.000</th>
        <th>II</th>
        <th>27</th>
        <th>Per Bulan</th>
      </tr>

      <!-- row 3 -->
      <tr>
        <th>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-info"><span class="material-symbols-outlined">info</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-warning"><span class="material-symbols-outlined">edit</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-error"><span class="material-symbols-outlined">delete</span></a>
        </th>
        <th>Bandarharjo I (Lama)</th>
        <th>Rp 100.000</th>
        <th>I</th>
        <th>27</th>
        <th>Per Bulan</th>
      </tr>
    </tbody>
  </table>
</div>

@endsection