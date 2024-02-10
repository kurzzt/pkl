@extends('components.admin-sidebar')

@section('title', 'Roles - Dashboard')
@section('sub-title', 'Roles')
@section('body')

<div class="flex space-x-5">
  <input type="text" placeholder="Search roles..." class="input input-bordered w-full" />
  <a class="btn btn-primary" href="/roles/create">
    <span class="material-symbols-outlined">add</span>
    Tambah
  </a>
</div>

<div class="overflow-x-auto">
  <table class="table table-zebra">
    <!-- head -->
    <thead>
      <tr>
        <th>Action</th>
        <th>Roles</th>
        <th>Status</th>
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
        <td>Super Admin</td>
        <td><span class="badge badge-success">active</span></td>
      </tr>
      <!-- row 2 -->
      <tr>
        <th>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-info"><span class="material-symbols-outlined">info</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-warning"><span class="material-symbols-outlined">edit</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-error"><span class="material-symbols-outlined">delete</span></a>
        </th>
        <td>Admin</td>
        <td><span class="badge badge-success">active</span></td>
      </tr>
      <!-- row 3 -->
      <tr>
        <th>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-info"><span class="material-symbols-outlined">info</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-warning"><span class="material-symbols-outlined">edit</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-error"><span class="material-symbols-outlined">delete</span></a>
        </th>
        <td>Guest</td>
        <td><span class="badge badge-success">active</span></td>
      </tr>
    </tbody>
  </table>
</div>

@endsection