@extends('layouts')

@section('title', 'Login - Admin Dashboard')
@section('body')

<div class="hero min-h-screen bg-base-200">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <img src="{{url('/logo-1.png')}}" alt="Logo Diskominfo Semarang" class="scale-50"/>
      <h1 class="text-5xl font-bold lg:text-center">Login now!</h1>
      <p class="py-6">Sistem Manajemen Status Pembayaran Retribusi Dinas Komunikasi dan Statistika Pemerintahan Kota Semarang</p>
    </div>
    <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
      
      @if (session()->has('loginError'))
      <div class="toast toast-top toast-center">
        <div role="alert" class="alert alert-error">
          <span class="material-symbols-outlined">cancel</span>
          <span>{{ session('loginError') }}</span>
          <div>
            <button class="btn btn-sm btn-outline">x</button>
          </div>
        </div>
      </div>
      @endif

      <form class="card-body" action="{{ route('auth.authenticate')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-control">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input name="email" id="email" type="email" placeholder="xxx@email.com" class="input input-bordered" autofocus required value="{{ old('email')}}"/>
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Password</span>
          </label>
          <input id="password" name="password" type="password" placeholder="******" class="input input-bordered" required />
          <label class="label">
            <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
          </label>
        </div>
        <div class="form-control mt-6">
          <button class="btn btn-primary" type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection