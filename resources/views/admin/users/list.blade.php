@extends('components.admin-sidebar')

@section('sub-title', 'Users')
@section('body')

<div class="flex space-x-5">
  <form action="{{ route('users.index')}}" class="flex w-full">
    <input type="text" name="search" id="search" placeholder="Search by name, username, and email" class="input input-bordered w-full"/>
  </form>
  <a class="btn btn-primary" href="{{route('users.create')}}">
    <span class="material-symbols-outlined">add</span>
    Tambah
  </a>
</div>

<div class="toast toast-end">
  @if(session()->has('success'))
    <div class="alert alert-success"><span>{{session('success')}}</span></div>
  @endif
</div>

<div class="overflow-x-auto">
  <table class="table">
    <thead>
      <tr>
        <th>Action</th>
        <th>Name/Username</th>
        <th>Email</th>
        <th>Status</th>
        <th class="hidden lg:table-cell">Created At</th>
        <th class="hidden lg:table-cell">Updated At</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)

      {{-- Delete Modal --}}
      <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
          <h3 class="font-bold text-lg">Delete Data Permanently</h3>
          <p class="py-4">Data that has been deleted cannot be restored. Are you sure?</p>
          <div class="modal-action">
            <form action="{{ route('users.destroy', ['user' => $user]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type='submit' class="btn btn-outline btn-primary">Delete</button>
            </form>
            <button onclick="document.getElementById('my_modal_5').close()" class="btn btn-error">Cancel</button>
          </div>
        </div>
      </dialog>

      <tr>
        <th>
          <a href="{{ route('users.show', $user->id) }}" class="btn btn-circle btn-sm btn-outline btn-info"><span class="material-symbols-outlined">info</span></a>
          <a href="{{ route('users.edit', ['user' => $user]) }}" class="btn btn-circle btn-sm btn-outline btn-warning"><span class="material-symbols-outlined">edit</span></a>
          <button class="btn btn-circle btn-sm btn-outline btn-error" onclick="document.getElementById('my_modal_5').showModal()"><span class="material-symbols-outlined">delete</span></button>
        </th>
        <td>
          <div class="flex items-center gap-3">
            <div>
              <div class="font-bold">{{ $user->name}}</div>
              <div class="text-sm opacity-50">{{ $user->username }}</div>
            </div>
          </div>
        </td>
        <td>{{ $user->email }}</td>
        <td>
          <span @class([ 'badge', 'badge-success' => $user->status, 'badge-error' => ! $user->status ])>{{ $user->status ? 'active' : 'inactive' }}</span>
        </td>
        <td class="hidden lg:table-cell">{{ $user->created_at }}</td>
        <td class="hidden lg:table-cell">{{ $user->updated_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<script>
  var toastMessage = document.querySelector('.toast .alert');
  if (toastMessage) {
      setTimeout(function () {
          toastMessage.parentElement.remove();
      }, 5000);
  }
</script>
@endsection