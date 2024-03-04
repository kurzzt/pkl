@extends('components.admin-sidebar')

@section('title', 'Create Users - Dashboard')
@section('sub-title', 'Create Users')
@section('body')

<div class="">
  @if($errors->any())
    @foreach($errors->all() as $error)
    <div role="alert" class="alert alert-error my-1">
      <span class="material-symbols-outlined w-full">error</span>{{ $error }}
    </div>
    @endforeach
  @endif

  <form action="{{route('users.store')}}" class="form-control space-y-2" method="POST">
    @csrf
    @method('POST')
    <div for="name">Name</div>
    <input type="text" placeholder="Please Input Your Name" class="input input-bordered w-full" id="name" name="name" value="{{old('name')}}" />

    <div for="username">Username</div>
    <input type="text" placeholder="Please Input Your Username" class="input input-bordered w-full" id="username" name="username" value="{{old('username')}}" />

    <div for="email">Email</div>
    <input type="text" placeholder="Please Input Your Email" class="input input-bordered w-full" id="email" name="email" value="{{old('email')}}"/>

    <div for="password">Password</div>
    <input type="password" placeholder="Please Input Your Password" class="input input-bordered w-full" id="password" name="password" />

    <div for="password_confirmation">Confirm Password</div>
    <input type="password" placeholder="Please Reinput Your Password" class="input input-bordered w-full" id="password_confirmation" name="password_confirmation" />

    <div class="h-[40px]"></div>

    <button type="submit" class="btn btn-primary w-full my-5">Tambah</button>
    <a href="{{ route('rusunawas.index') }}" class="btn btn-secondary">Cancel</a>
  </form>
</div>



@endsection