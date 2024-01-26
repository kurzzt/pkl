@extends('components.admin-sidebar')

@section('sub-title', 'Users')
@section('body')

<div class="flex space-x-5">
  <input type="text" placeholder="Search users..." class="input input-bordered w-full" />
  <button class="btn btn-primary">
    <span class="material-symbols-outlined">add</span>
    Tambah
  </button>
</div>

<div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th>Action</th>
        <th>Name</th>
        <th>Job</th>
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
        <td>
          <div class="flex items-center gap-3">
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
                <img src="https://hackspirit.com/wp-content/uploads/2021/06/Copy-of-Rustic-Female-Teen-Magazine-Cover.jpg" alt="Avatar Tailwind CSS Component" />
              </div>
            </div>
            <div>
              <div class="font-bold">Hart Hagerty</div>
              <div class="text-sm opacity-50">United States</div>
            </div>
          </div>
        </td>
        <td>
          Zemlak, Daniel and Leannon
          <br/>
          <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
        </td>
        <td><span class="badge badge-success">active</span></td>
        
      </tr>
      <!-- row 2 -->
      <tr>
        <th>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-info"><span class="material-symbols-outlined">info</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-warning"><span class="material-symbols-outlined">edit</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-error"><span class="material-symbols-outlined">delete</span></a>
        </th>
        <td>
          <div class="flex items-center gap-3">
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
                <img src="https://hackspirit.com/wp-content/uploads/2021/06/Copy-of-Rustic-Female-Teen-Magazine-Cover.jpg" alt="Avatar Tailwind CSS Component" />
              </div>
            </div>
            <div>
              <div class="font-bold">Brice Swyre</div>
              <div class="text-sm opacity-50">China</div>
            </div>
          </div>
        </td>
        <td>
          Carroll Group
          <br/>
          <span class="badge badge-ghost badge-sm">Tax Accountant</span>
        </td>
        <td><span class="badge badge-success">active</span></td>
        
      </tr>
      <!-- row 3 -->
      <tr>
        <th>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-info"><span class="material-symbols-outlined">info</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-warning"><span class="material-symbols-outlined">edit</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-error"><span class="material-symbols-outlined">delete</span></a>
        </th>
        <td>
          <div class="flex items-center gap-3">
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
                <img src="https://hackspirit.com/wp-content/uploads/2021/06/Copy-of-Rustic-Female-Teen-Magazine-Cover.jpg" alt="Avatar Tailwind CSS Component" />
              </div>
            </div>
            <div>
              <div class="font-bold">Marjy Ferencz</div>
              <div class="text-sm opacity-50">Russia</div>
            </div>
          </div>
        </td>
        <td>
          Rowe-Schoen
          <br/>
          <span class="badge badge-ghost badge-sm">Office Assistant I</span>
        </td>
        <td><span class="badge badge-success">active</span></td>
        
      </tr>
      <!-- row 4 -->
      <tr>
        <th>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-info"><span class="material-symbols-outlined">info</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-warning"><span class="material-symbols-outlined">edit</span></a>
          <a href="" class="btn btn-circle btn-sm btn-outline btn-error"><span class="material-symbols-outlined">delete</span></a>
        </th>
        <td>
          <div class="flex items-center gap-3">
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
                <img src="https://hackspirit.com/wp-content/uploads/2021/06/Copy-of-Rustic-Female-Teen-Magazine-Cover.jpg" alt="Avatar Tailwind CSS Component" />
              </div>
            </div>
            <div>
              <div class="font-bold">Yancy Tear</div>
              <div class="text-sm opacity-50">Brazil</div>
            </div>
          </div>
        </td>
        <td>
          Wyman-Ledner
          <br/>
          <span class="badge badge-ghost badge-sm">Community Outreach Specialist</span>
        </td>
        <td><span class="badge badge-success">active</span></td>
      </tr>
    </tbody>
    <!-- foot -->
    <!-- <tfoot>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Job</th>
        <th>Favorite Color</th>
        <th></th>
      </tr>
    </tfoot> -->
    
  </table>
</div>

@endsection