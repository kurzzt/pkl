@extends('components.admin-sidebar')

@section('title', 'Edit Users - Dashboard')
@section('sub-title', 'Edit Users')
@section('body')

<div class="">
  @if($errors->any())
    @foreach($errors->all() as $error)
    <div role="alert" class="alert alert-error my-1">
      <span class="material-symbols-outlined w-full">error</span>{{ $error }}
    </div>
    @endforeach
  @endif

  <form method='POST' action="{{route('users.update', ['user' => $user])}}" class="form-control space-y-2">
    @csrf 
    @method('PUT')

    <div for="name">Name</div>
    <input type="text" placeholder="Please Input Your Name" class="input input-bordered w-full" id="name" name="name" value="{{$user->name}}" />

    <div for="username">Username</div>
    <input type="text" placeholder="Please Input Your Username" class="input input-bordered w-full" id="username" name="username" value="{{$user->username}}" />

    <div for="email">Email</div>
    <input type="text" placeholder="Please Input Your Email" class="input input-bordered w-full" id="email" name="email" value="{{$user->email}}"/>

    <div for="new_password">New Password</div>
    <input type="password" placeholder="Please Input Your Password" class="input input-bordered w-full" id="new_password" name="new_password" />

    <div for="new_password_confirmation">Confirm New Password</div>
    <input type="password" placeholder="Please Reinput Your Password" class="input input-bordered w-full" id="new_password_confirmation" name="new_password_confirmation" />

    <div for="status" class="form-control">Status</div>
    <div class="">
      <input type="radio" name="status" value="1" class="radio checked:bg-red-500 " @if($user->status) checked @endif/>
      <span>Active</span>
    </div>
    <div class="">
      <input type="radio" name="status" value="0" class="radio checked:bg-red-500" @if( ! $user->status) checked @endif/>
      <span>Inactive</span>
    </div>

    <div class="h-[40px]"></div>

    <button type="submit" class="btn btn-primary w-full my-5">Update</button>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>

  </form>
</div>



@endsection