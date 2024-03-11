@extends('components.admin-sidebar')

@section('title', 'Edit Retribution - Dashboard')
@section('sub-title', 'Edit Retribution')
@section('body')

<div class="">
  @if($errors->any())
    @foreach($errors->all() as $error)
    <div role="alert" class="alert alert-error my-1">
      <span class="material-symbols-outlined w-full">error</span>{{ $error }}
    </div>
    @endforeach
  @endif
  
  <form action="{{route('retributions.update', ['retribution' => $retribution])}}" class="form-control space-y-2" method="POST">
    @csrf
    @method('PUT')

    <div for="name">Uploader Name</div>
    <input type="text" name="uploader" id="uploader" class="input input-bordered w-full" 
      @if($retribution->uploader_type != 'Admin') 
          disabled 
      @endif
      value="{{ $uploader->name }}"
    >

    <div for="name">Uploader Email</div>
    <input type="text" name="uploader" id="uploader" class="input input-bordered w-full" 
      @if($retribution->uploader_type != 'Admin') 
          disabled 
      @endif
      value="{{ $uploader->email }}"
    >

    <div for="name">Rusunawa</div>
    <select required name="rusunawa_id" id="rusunawa" class="select select-bordered w-full">
      <option disabled selected>Please Select Rusunawa</option>
      @foreach($rusunawas as $rusunawa)
        <option value="{{ $rusunawa->id }}" {{ $rusunawa->id === $retribution->rusunawa_id ? 'selected' : '' }}>{{ $rusunawa->name}} - {{$rusunawa->subname }} - {{$rusunawa->lantai }}</option>
      @endforeach
    </select>

    <div for="name"></div>
    <x-date-picker name="payment_of" label="Pembayaran Tanggal" value='{{ $retribution->payment_of }}'/>
    
    <div for="nominal">Nominal</div>
    <input type="text" name="nominal" id="nominal" class="input input-bordered w-full" value="{{ $retribution->nominal }}">
    
    <x-upload.single-file name="file" label="Bukti Pembayaran" imgPreview='{{ $retribution->file }}'/>

    <div for="status">Status</div>
    <div class="">
      <input type="radio" name="status" value="Verified" class="radio checked:bg-green-500 " @if($retribution->status == 'Verified') checked @endif/>
      <span>Verified</span>
    </div>
    <div class="">
      <input type="radio" name="status" value="Unverified" class="radio checked:bg-red-500" @if($retribution->status == 'Unverified') checked @endif/>
      <span>Unverified</span>
    </div>
    
    <div class="h-[40px]"></div>

    <button type="submit" class="btn btn-primary w-full my-5">Update</button>
    <a href="{{ route('retributions.index') }}" class="btn btn-secondary">Cancel</a>
  </form>
</div>
@endsection