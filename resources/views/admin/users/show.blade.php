@extends('components.admin-sidebar')

@section('title', 'User Info - Dashboard')
@section('sub-title', 'User Info')
@section('body')

<div class="">
    <div class="flex flex-col space-y-4">
      <div>Name: {{$user->name}}</div>
      <div>Username: {{$user->username}}</div>
      <div>Email: {{$user->email}}</div>
      <div>Status: 
        <span @class([ 'badge', 'badge-success' => $user->status, 'badge-error' => ! $user->status ])>{{ $user->status ? 'active' : 'inactive' }}</span>
      </div>
      <div>Created At: {{$user->created_at}}</div>
      <div>Updated At: {{$user->updated_at}}</div>
    </div>
    
    <div class="h-[30px]"></div>
    
    <h1 class="font-bold text-lg">User Activity</h1>
    <div  class="overflow-x-auto">
      <table class="table">
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

    <div class="h-[30px]"></div>

    <a class="btn btn-ghost btn-outline w-full my-5" href="{{ route('users.index')}}">Back</a>
</div>



@endsection