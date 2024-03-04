@extends('components.admin-sidebar')

@section('title', 'Create Retributions - Dashboard')
@section('sub-title', 'Create Retributions')
@section('body')
<script src="{{ asset('js/uploadFFile.js') }}"></script>

<div class="">
  <form action="{{ route('retributions.store')}}" class="form-control space-y-2">
    @csrf
    @method('POST')

    <div for="rusunawa">Rusunawa</div>
    <select class="select select-bordered w-full">
      <option disabled selected>Please Select Rusunawa</option>
      @foreach($rusunawas as $rusunawa)
        <option value="{{$rusunawa->id }}">{{ $rusunawa->name}} - {{$rusunawa->subname }}</option>
      @endforeach
    </select>
  
    <div for="nominal">Nominal</div>
    <input type="number" placeholder="Please Input Nominal" class="input input-bordered w-full" id="nominal" name="nominal"/>
  
    <div for="file">File</div>
    <input type="file" class="file-input file-input-bordered w-full" id="file" name="file"/>

    <div class="h-[40px]"></div>

    <button type="submit" class="btn btn-primary w-full my-5">Tambah</button>
    <a class="btn btn-secondary w-full my-5" href="{{ route('retributions.index')}}">Cancel</a>
  </form>
</div>


@endsection