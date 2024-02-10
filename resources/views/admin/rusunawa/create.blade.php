@extends('components.admin-sidebar')

@section('title', 'Create Rusunawa - Dashboard')
@section('sub-title', 'Create Rusunawa')
@section('body')

<div class="">
  <form action="" class="form-control space-y-2">
    <div for="email">Name</div>
    <input type="text" placeholder="Please Input Name" class="input input-bordered w-full" />
  
    <div for="name">Sub Nama</div>
    <input type="text" placeholder="Please Input Subname" class="input input-bordered w-full" />
  
    <div for="nominal">Tarif Retribusi</div>
    <input type="number" placeholder="Please Input Retribution Fare" class="input input-bordered w-full" />

    <div for="rusunawa">Lantai</div>
    <select class="select select-bordered w-full">
      <option disabled selected>Please Select Lantai</option>
      <option>I</option>
      <option>II</option>
      <option>III</option>
      <option>IV</option>
      <option>V</option>
    </select>

    <div for="rusunawa">Type</div>
    <select class="select select-bordered w-full">
      <option disabled selected>Please Select Type</option>
      <option>24</option>
      <option>27</option>
      <option>36</option>
      <option>54</option>
      <option>81</option>
    </select>

    <div for="rusunawa">Satuan</div>
    <select class="select select-bordered w-full">
      <option disabled selected>Please Select Unit</option>
      <option>Per Tahun </option>
      <option>Per Bulan</option>
      <option>Per Hari</option>
    </select>

    <a class="btn btn-primary w-full my-5" href="/retributions/create">Tambah</a>
  </form>
</div>


@endsection