@extends('components.admin-sidebar')

@section('title', 'Edit Rusunawa - Dashboard')
@section('sub-title', 'Edit Rusunawa')
@section('body')

<div class="">
  @if($errors->any())
    @foreach($errors->all() as $error)
    <div role="alert" class="alert alert-error my-1">
      <span class="material-symbols-outlined w-full">error</span>{{ $error }}
    </div>
    @endforeach
  @endif
  
  <form action="{{route('rusunawas.update', ['rusunawa' => $rusunawa])}}" class="form-control space-y-2" method="POST">
    @csrf
    @method('PUT')

    <div for="name">Name</div>
    <input type="text" placeholder="Please Input Name" class="input input-bordered w-full" id="name" name="name" value="{{$rusunawa->name}}" />

    <div for="subname">Subname</div>
    <input type="text" placeholder="Please Input Subname" class="input input-bordered w-full" id="subname" name="subname" value="{{$rusunawa->subname}}" />

    <div for="lantai">Lantai</div>
    <select id="lantai" name="lantai" class="select select-bordered w-full">
      <option disabled>Please Select Lantai</option>
      @foreach(['I', 'II', 'III', 'IV', 'V'] as $option)
        <option value="{{ $option }}" {{ $rusunawa->lantai === $option ? 'selected' : '' }}>{{ $option }}</option>
      @endforeach
    </select>

    <div for="tipe">Type</div>
    <select id="tipe" name="tipe" class="select select-bordered w-full">
      <option disabled>Please Select Type</option>
      @foreach([24, 27, 36, 54, 81] as $option)
        <option value="{{ $option }}" {{ $rusunawa->tipe === $option ? 'selected' : '' }}>{{ $option }}</option>
      @endforeach
    </select>
    
    <div for="fare">Tarif Retribusi</div>
    <input type="number" placeholder="Please Input Retribution Fare" class="input input-bordered w-full" id="fare" name="fare" value="{{$rusunawa->fare}}"/>

    <div for="unit">Satuan</div>
    <select id="unit" name="unit" class="select select-bordered w-full">
      <option disabled>Please Select Unit</option>
      @foreach(['year' => 'Per Tahun', 'month' => 'Per Bulan', 'day' => 'Per Hari'] as $value => $label)
        <option value="{{ $value }}" {{ $rusunawa->unit === $value ? 'selected' : '' }}>{{ $label }}</option>
      @endforeach
    </select>
    
    <div class="h-[40px]"></div>

    <button type="submit" class="btn btn-primary w-full my-5">Update</button>
    <a href="{{ route('rusunawas.index') }}" class="btn btn-secondary">Cancel</a>
  </form>
</div>
@endsection