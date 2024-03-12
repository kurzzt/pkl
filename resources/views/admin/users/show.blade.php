@extends('components.admin-sidebar')

@section('title', 'User Info - Dashboard')
@section('sub-title', 'User Info')
@section('body')

<div class="">
  <table class="table table-zebra">
    <tr>
      <td>Name</td>
      <td>{{$user->name}}</td>
    </tr>
    <tr>
      <td>Username</td>
      <td>{{$user->username}}</td>
    </tr>
    <tr>
      <td>Email</td>
      <td>{{$user->email}}</td>
    </tr>
    <tr>
      <td>Status</td>
      <td>
        <span @class([ 
          'badge', 
          'badge-success' => $user->status, 
          'badge-error' => ! $user->status 
        ])>
          {{ $user->status ? 'active' : 'inactive' }}
        </span>
      </td>
    </tr>
    <tr>
      <td>Created At</td>
      <td>{{$user->created_at}}</td>
    </tr>
    <tr>
      <td>Updated At</td>
      <td>{{$user->updated_at}}</td>
    </tr>
  </table>  
  <div class="h-[30px]"></div>
  
  <h1 class="font-bold text-xl">User Activity</h1>
  <div  class="overflow-x-auto">
    <table class="table table-zebra">
      <thead>
        <tr>
          <th>Action</th>
          <th>Invoked At</th>
        </tr>
      </thead>
      <tbody>
        @foreach($user_activity as $item)
          <tr>
            <td>{{$item->action}}</td>
            <td>{{$item->created_at}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="flex justify-center py-4">{{ $user_activity->links() }}</div>

  <div class="h-[30px]"></div>

  <a class="btn btn-ghost btn-outline w-full my-5" href="{{ route('users.index')}}">Back</a>
</div>



@endsection