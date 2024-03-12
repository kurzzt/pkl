@extends('components.admin-sidebar')

@section('title', 'Create Retributions - Dashboard')
@section('sub-title', 'Create Retributions')
@section('body')

<div class="">
  @if($errors->any())
    @foreach($errors->all() as $error)
    <div role="alert" class="alert alert-error my-1">
      <span class="material-symbols-outlined w-full">error</span>{{ $error }}
    </div>
    @endforeach
  @endif

  <form action="{{ route('retributions.store')}}" class="form-control space-y-2" method="POST">
    @csrf
    @method('POST')
    <input type="hidden" value="admin" name="uploader_type" id="uploader_type">

    <div for="rusunawa_id">Rusunawa</div>
    <select required name="rusunawa_id" class="select select-bordered w-full">
      <option disabled selected value=''>Please Select Rusunawa</option>
      @foreach($rusunawas as $rusunawa)
        <option value="{{$rusunawa->id }}">{{ $rusunawa->name}} - {{$rusunawa->subname }} - {{$rusunawa->lantai }}</option>
      @endforeach
    </select>

    <x-date-picker label="Tanggal Pembayaran" name="payment_of"/>

    <div for="nominal">Nominal</div>
    <input required type="number" placeholder="Please Input Nominal" class="input input-bordered w-full" id="nominal" name="nominal"/>
    
    <x-upload.single-file name="file" label="Upload Bukti Pembayaran"/>
    
    <div class="h-[40px]"></div>

    <button type="submit" class="btn btn-primary w-full my-5">Tambah</button>
    <a class="btn btn-secondary w-full my-5" href="{{ route('retributions.index')}}">Cancel</a>
  </form>
</div>
@endsection