@extends('components.admin-sidebar')

@section('title', 'Create Rusunawa - Dashboard')
@section('sub-title', 'Create Rusunawa')
@section('body')

<div class="">
  @if($errors->any())
    @foreach($errors->all() as $error)
    <div role="alert" class="alert alert-error my-1">
      <span class="material-symbols-outlined w-full">error</span>{{ $error }}
    </div>
    @endforeach
  @endif
  
  <form action="{{route('rusunawas.store')}}" class="form-control space-y-2" method="POST">
    @csrf
    @method('POST')
    <div for="name">Name</div>
    <input required type="text" placeholder="Please Input Name" class="input input-bordered w-full" id="name" name="name" value="{{old('name')}}" />

    <div for="subname">Subname</div>
    <input required type="text" placeholder="Please Input Subname" class="input input-bordered w-full" id="subname" name="subname" value="{{old('subname')}}" />

    <div for="lantai">Lantai</div>
    <select required id="lantai" name="lantai" class="select select-bordered w-full">
      <option disabled selected value=''>Please Select Lantai</option>
      <option value="I">I</option>
      <option value="II">II</option>
      <option value="III">III</option>
      <option value="IV">IV</option>
      <option value="V">V</option>
    </select>

    <div for="tipe">Type</div>
    <select required id="tipe" name="tipe" class="select select-bordered w-full">
      <option disabled selected value=''>Please Select Type</option>
      <option value=24>24</option>
      <option value=27>27</option>
      <option value=36>36</option>
      <option value=54>54</option>
      <option value=81>81</option>
    </select>
    
    <div for="fare">Tarif Retribusi</div>
    <input required type="number" placeholder="Please Input Retribution Fare" class="input input-bordered w-full" id="fare" name="fare" />

    <div for="unit">Satuan</div>
    <select required id="unit" name="unit" class="select select-bordered w-full">
      <option disabled selected value=''>Please Select Unit</option>
      <option value="year">Per Tahun </option>
      <option value="month">Per Bulan</option>
      <option value="day">Per Hari</option>
    </select>
    
    <div class="h-[40px]"></div>

    <button type="submit" class="btn btn-primary w-full my-5">Tambah</button>
      <a href="{{ route('rusunawas.index') }}" class="btn btn-secondary">Cancel</a>  
  </form>
</div>


@endsection