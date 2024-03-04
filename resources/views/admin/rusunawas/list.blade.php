@extends('components.admin-sidebar')
@section('title', 'Rusunawa - Admin Dashboard')
@section('sub-title', 'Rusunawa')
@section('body')

<div class="flex space-x-5">
  <input type="text" placeholder="Search rusunawa..." class="input input-bordered w-full" />
  <a class="btn btn-primary" href="{{ route('rusunawas.create')}}">
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
        <th>Name</th>
        <th>Lantai</th>
        <th>Type</th>
        <th>Tarif Retribusi</th>
        <th>Satuan</th>
        <th class="hidden lg:table-cell">Created At</th>
        <th class="hidden lg:table-cell">Updated At</th>
      </tr>
    </thead>
    <tbody>
      @foreach($rusunawas as $rusun)

      {{-- Delete Modal --}}
      <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
          <h3 class="font-bold text-lg">Delete Data Permanently</h3>
          <p class="py-4">Data that has been deleted cannot be restored. Are you sure?</p>
          <div class="modal-action">
            <form action="{{ route('rusunawas.destroy', ['rusunawa' => $rusun]) }}" method="POST">
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
          <a href="{{ route('rusunawas.show', $rusun->id) }}" class="btn btn-circle btn-sm btn-outline btn-info"><span class="material-symbols-outlined">info</span></a>
          <a href="{{ route('rusunawas.edit', ['rusunawa' => $rusun]) }}" class="btn btn-circle btn-sm btn-outline btn-warning"><span class="material-symbols-outlined">edit</span></a>
          <button class="btn btn-circle btn-sm btn-outline btn-error" onclick="document.getElementById('my_modal_5').showModal()"><span class="material-symbols-outlined">delete</span></button>
        </th>
        <td>
          <div class="flex items-center gap-3">
            <div>
              <div class="font-bold">{{ $rusun->name}}</div>
              <div class="text-sm opacity-50">{{ $rusun->subname }}</div>
            </div>
          </div>
        </td>
        <td>{{ $rusun->lantai}}</td>
        <td>{{ $rusun->tipe}}</td>
        <td>Rp {{ $rusun->fare}}</td>
        <td>{{ $rusun->unit}}</td>
        <td class="hidden lg:table-cell">{{ $rusun->created_at}}</td>
        <td class="hidden lg:table-cell">{{ $rusun->updated_at}}</td>
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