@extends('components.admin-sidebar')

@section('title', 'Create Roles - Dashboard')
@section('sub-title', 'Create Roles')
@section('body')

<div class="">
  <form action="" class="form-control space-y-2">
    <div for="email">Role Name</div>
    <input type="text" placeholder="Please Input Role Name" class="input input-bordered w-full" />
  
    <div for="name">Description</div>
    <textarea class="textarea textarea-bordered" placeholder="Description"></textarea>

    <div for="rusunawa" class="form-control">Status</div>
    <div class="">
      <input type="radio" name="radio-10" class="radio checked:bg-red-500" checked />
      <span>Active</span>
    </div>
    <div class="">
      <input type="radio" name="radio-10" class="radio checked:bg-red-500" checked />
      <span>Inactive</span>
    </div>


    <input type="submit" class="btn btn-primary w-full my-5" placeholder="Tambah"/>
  </form>
</div>


@endsection