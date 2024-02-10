@extends('components.admin-sidebar')

@section('title', 'Retributions - Dashboard')
@section('sub-title', 'Retributions')
@section('body')

<div class="flex space-x-5">
  <input type="text" placeholder="Search retributions..." class="input input-bordered w-full" />
  <a class="btn btn-primary" href="/retributions/create">
    <span class="material-symbols-outlined">add</span>
    Tambah
  </a>
</div>

<div class="overflow-x-auto">
  <table class="table">
    <thead>
      <tr>
        <th>Action</th>
        <th>Rusunawa</th>
        <th>Nominal</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
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
        <th>Rumah Bertingkat</th>
        <th>Rp 57.000</th>
        <th>Unverified</th>
        <th>Senin, 5 February 2024</th>
        <th>Senin, 5 February 2024</th>
      </tr>

      <!-- row 2 -->
      <tr>
        <th>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-info"><span class="material-symbols-outlined">info</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-warning"><span class="material-symbols-outlined">edit</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-error"><span class="material-symbols-outlined">delete</span></a>
        </th>
        <th>Rumah Susun Sewa</th>
        <th>Rp 104.000</th>
        <th>Unverified</th>
        <th>Senin, 5 February 2024</th>
        <th>Senin, 5 February 2024</th>
      </tr>

      <!-- row 2 -->
      <tr>
        <th>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-info"><span class="material-symbols-outlined">info</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-warning"><span class="material-symbols-outlined">edit</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-error"><span class="material-symbols-outlined">delete</span></a>
        </th>
        <th>Mangunharjo Tugu I-V</th>
        <th>Rp 1.030.000</th>
        <th>Verified</th>
        <th>Senin, 5 February 2024</th>
        <th>Senin, 5 February 2024</th>
      </tr>


    </tbody>
  </table>
</div>


@endsection