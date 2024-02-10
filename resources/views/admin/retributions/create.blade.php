@extends('components.admin-sidebar')

@section('title', 'Create Retributions - Dashboard')
@section('sub-title', 'Create Retributions')
@section('body')

<div class="">
  <form action="" class="form-control space-y-2">
    <div for="rusunawa">Rusunawa</div>
    <select class="select select-bordered w-full">
      <option disabled selected>Please Select Rusunawa</option>
      <option>Rumah Bertingkat</option>
      <option>Rumah Susun Sewa</option>
      <option>Rumah Deret</option>
      <option>Rumah Rumah Susun Pekerja di Jrakah</option>
      <option>Pondok Boro (Lama)</option>
      <option>Pondok Boro (Baru)</option>
      <option>Mangunharjo Tugu I-V</option>
      <option>Tambak Lorok I-IV</option>
      <option>Rowosari I-II</option>
    </select>
    
    <div for="email">Email</div>
    <input type="text" placeholder="Please Input Your Email" class="input input-bordered w-full" />
  
    <div for="name">Name</div>
    <input type="text" placeholder="Please Input Your Name" class="input input-bordered w-full" />
  
    <div for="nominal">Nominal</div>
    <input type="number" placeholder="Please Input Nominal" class="input input-bordered w-full" />
  
    <div for="file">File</div>
    <input type="file" class="file-input file-input-bordered w-full" />

    <div for="rusunawa">Status</div>
    <select class="select select-bordered w-full">
      <option disabled selected>Please Select Status</option>
      <option>Unverified</option>
      <option>Verified</option>
    </select>

    <a class="btn btn-primary w-full my-5" href="/retributions/create">Tambah</a>
  </form>
</div>


@endsection