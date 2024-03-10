@extends('components.admin-sidebar')

@section('title', 'Home - Account')
@section('sub-title', 'Account Information')
@section('body')

<div>
  <div>Name: {{ auth()->user()->name }}</div>
  <div>Username: {{ auth()->user()->username }}</div>
  <div>Email: {{ auth()->user()->email }}</div>
  <div>Status: 
    <span @class([ 
      'badge', 
      'badge-success' => auth()->user()->status, 
      'badge-error' => ! auth()->user()->status 
    ])>
      {{ auth()->user()->status ? 'active' : 'inactive' }}
    </span>
  </div>
  <div>Created At: {{ auth()->user()->created_at }}</div>
  <div>Updated At: {{ auth()->user()->updated_at }}</div>
</div>

@endsection