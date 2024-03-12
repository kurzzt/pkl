@extends('components.admin-sidebar')

@section('title', 'Home - Account')
@section('sub-title', 'Account Information')
@section('body')

<div>
  <table class="table table-zebra">
    <tr>
      <td>Name</td>
      <td>{{ auth()->user()->name }}</td>
    </tr>
    <tr>
      <td>Username</td>
      <td>{{ auth()->user()->username }}</td>
    </tr>
    <tr>
      <td>Email</td>
      <td>{{ auth()->user()->email }}</td>
    </tr>
    <tr>
      <td>Status</td>
      <td>
        <span @class([ 
          'badge', 
          'badge-success' => auth()->user()->status, 
          'badge-error' => ! auth()->user()->status 
        ])>
          {{ auth()->user()->status ? 'active' : 'inactive' }}
        </span>
      </td>
    </tr>
    <tr>
      <td>Created At</td>
      <td>{{ auth()->user()->created_at }}</td>
    </tr>
    <tr>
      <td>Updated At</td>
      <td>{{ auth()->user()->updated_at }}</td>
    </tr>
  </table>
</div>

@endsection