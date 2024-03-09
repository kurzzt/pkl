@extends('components.admin-sidebar')

@section('title', 'Retributions - Dashboard')
@section('sub-title', 'Retributions')
@section('body')

<div class="flex space-x-5">
  <input type="text" placeholder="Search retributions..." class="input input-bordered w-full" />
  <a class="btn btn-primary" href="{{route('retributions.create')}}">
    <span class="material-symbols-outlined">add</span>
    Tambah
  </a>
</div>

<div>
  @if(session()->has('success'))
  <div>{{session('success')}}</div>
  @endif
</div>

<div class="overflow-x-auto">
  <table class="table">
    <thead>
      <tr>
        <th>Action</th>
        <th>Rusunawa</th>
        <th>Uploader</th>
        <th>Nominal</th>
        <th>File</th>
        <th>Status</th>
        <th class="hidden lg:table-cell">Created At</th>
        <th class="hidden lg:table-cell">Updated At</th>
      </tr>
    </thead>
    <tbody>
      @foreach($retributions as $retribution)

      {{-- Delete Modal --}}
      <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
          <h3 class="font-bold text-lg">Delete Data Permanently</h3>
          <p class="py-4">Data that has been deleted cannot be restored. Are you sure?</p>
          <div class="modal-action">
            <form action="{{ route('retributions.destroy', ['retribution' => $retribution]) }}" method="POST">
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
          <a href="{{ route('retributions.show', $retribution->id) }}" class="btn btn-circle btn-sm btn-outline btn-info"><span class="material-symbols-outlined">info</span></a>
          <a href="{{ route('retributions.edit', ['retribution' => $retribution]) }}" class="btn btn-circle btn-sm btn-outline btn-warning"><span class="material-symbols-outlined">edit</span></a>
          <button class="btn btn-circle btn-sm btn-outline btn-error" onclick="document.getElementById('my_modal_5').showModal()"><span class="material-symbols-outlined">delete</span></button>
        </th>
        <td>{{ $retribution->rusunawa_id}}</td>
        <td>{{ $retribution->uploader_id}}</td>
        <td>Rp {{ $retribution->nominal}}</td>
        <td>
        
        <img class="rounded w-[100px]" src="{{ $retribution->file}}" alt="Doc File">
        </td>
        <td>
          <span @class([ 'badge', 'badge-success' => $retribution->status, 'badge-error' => ! $retribution->status ])>{{ $retribution->status ? 'Verified' : 'Unverified' }}</span>
        </td>
        <td class="hidden lg:table-cell">{{ $retribution->created_at}}</td>
        <td class="hidden lg:table-cell">{{ $retribution->updated_at}}</td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>


@endsection