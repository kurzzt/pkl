@extends('components.admin-sidebar')

@section('title', 'Create Users - Dashboard')
@section('sub-title', 'Create Users')
@section('body')

<div class="">
  <form action="" class="form-control space-y-2">
    <div for="email">Name</div>
    <input type="text" placeholder="Please Input Your Name" class="input input-bordered w-full" />
  
    <div for="name">Username</div>
    <input type="text" placeholder="Please Input Your Username" class="input input-bordered w-full" />
  
    <div for="name">Email</div>
    <input type="text" placeholder="Please Input Your Email" class="input input-bordered w-full" />

    <div for="rusunawa">Role</div>
    <select class="select select-bordered w-full">
      <option disabled selected>Please Select Role</option>
      <option>Super Admin</option>
      <option>Admin</option>
      <option>Guest</option>
    </select>

    <div for="name">Password</div>
    <input type="password" placeholder="Please Input Your Password" class="input input-bordered w-full" />
  
    <div for="name">Confirm Password</div>
    <input type="password" placeholder="Please Reinput Your Password" class="input input-bordered w-full" />

    <!-- <div class="h-[40px]"></div> -->
    
    <!-- <div for="rusunawa" class="form-control">Status</div>
    <div class="">
      <input type="radio" name="radio-10" class="radio checked:bg-red-500" checked />
      <span>Active</span>
    </div>
    <div class="">
      <input type="radio" name="radio-10" class="radio checked:bg-red-500" checked />
      <span>Inactive</span>
    </div> -->

    <a class="btn btn-primary w-full my-5" href="/retributions/create">Tambah</a>
  </form>
</div>



@endsection