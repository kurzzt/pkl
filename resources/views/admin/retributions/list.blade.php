@extends('components.admin-sidebar')

@section('title', 'Retributions - Dashboard')
@section('sub-title', 'Retributions')
@section('body')

<div class="flex space-x-5">
  <form action="{{ route('retributions.index')}}" class="flex w-full">
    <input type="text" name="search" id="search" placeholder="Search by rusunawa" class="input input-bordered w-full" value="{{ request('search') }}"/>
  </form>
  <a class="btn btn-primary" href="{{route('retributions.create')}}">
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
        <th>Rusunawa</th>
        <th>Payment Of</th>
        <th>Nominal</th>
        <th class="hidden lg:table-cell">File</th>
        <th>Status</th>
        <th class="hidden lg:table-cell">Created At</th>
        <th class="hidden lg:table-cell">Updated At</th>
      </tr>
    </thead>
    <tbody>
      @foreach($retributions as $retribution)

      {{-- Delete Modal --}}
      <dialog id="my_modal_{{$retribution->id}}" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
          <h3 class="font-bold text-lg">Delete Data Permanently</h3>
          <p class="py-4">Data that has been deleted cannot be restored. Are you sure?</p>
          <div class="modal-action">
            <form action="{{ route('retributions.destroy', ['retribution' => $retribution]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type='submit' class="btn btn-outline btn-primary">Delete</button>
            </form>
            <button onclick="document.getElementById('my_modal_{{$retribution->id}}').close()" class="btn btn-error">Cancel</button>
          </div>
        </div>
      </dialog>

      <tr>
        <th>
          <a href="{{ route('retributions.show', $retribution->id) }}" class="btn btn-circle btn-sm btn-outline btn-info"><span class="material-symbols-outlined">info</span></a>
          <a href="{{ route('retributions.edit', ['retribution' => $retribution]) }}" class="btn btn-circle btn-sm btn-outline btn-warning"><span class="material-symbols-outlined">edit</span></a>
          <button class="btn btn-circle btn-sm btn-outline btn-error" onclick="document.getElementById('my_modal_{{$retribution->id}}').showModal()"><span class="material-symbols-outlined">delete</span></button>
        </th>
        <td>
          <div class="flex items-center gap-3">
            <div>
              <div class="font-bold">{{ $retribution->name}}</div>
              <div class="text-sm opacity-50">{{ $retribution->subname }} - {{ $retribution->lantai }}</div>
            </div>
          </div>
        </td>
        <td>{{ $retribution->payment_of}}</td>
        <td>Rp {{ $retribution->nominal}}</td>
        <td class="hidden lg:table-cell">
          <img class="rounded w-[100px]" src="{{ $retribution->file}}" alt="Doc File">
        </td>
        <td>
          <span @class([ 
            'badge', 
            'badge-success' => $retribution->status == 'Verified', 
            'badge-error' => $retribution->status == 'Unverified'
          ])>
            {{ $retribution->status }}
          </span>
        </td>
        <td class="hidden lg:table-cell">{{ $retribution->created_at}}</td>
        <td class="hidden lg:table-cell">{{ $retribution->updated_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="flex justify-center py-4">{{ $retributions->links() }}</div>

<script>
  var toastMessage = document.querySelector('.toast .alert');
  if (toastMessage) {
      setTimeout(function () {
          toastMessage.parentElement.remove();
      }, 5000);
  }
</script>
@endsection