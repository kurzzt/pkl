@extends('layouts')

@section('body')

@extends('guest-navbar')

<div class="toast toast-end">
  @if(session()->has('success'))
    <div class="alert alert-success"><span>{{session('success')}}</span></div>
  @endif
</div>

<div class="h-screen bg-base-200">
  <div class="h-[70px]"></div>
  <div class="container lg:w-2/3 space-y-4">
    
    @if($errors->any())
      @foreach($errors->all() as $error)
      <div role="alert" class="alert alert-error my-1">
        <span class="material-symbols-outlined w-full">error</span>{{ $error }}
      </div>
      @endforeach
    @endif

    <h1 class="text-5xl text-center font-bold">Ajukan Laporan</h1>
    
    <form action="{{ route('home.store') }}" class="form space-y-2" method="POST">
      @csrf
      @method('POST')

      <div>Nama</div>
      <input type="text" name="name" id="name" class="input w-full" required>
      
      <div>Email</div>
      <input type="email" name="email" id="email" class="input w-full"  required>

      <div class="h-[10px]"></div>

      <div>Rusunawa</div>
      <select required name="rusunawa_id" class="select select-bordered w-full">
        <option disabled selected>Please Select Rusunawa</option>
        @foreach($rusunawas as $rusunawa)
          <option value="{{$rusunawa->id }}">{{ $rusunawa->name}} - {{$rusunawa->subname }} - {{$rusunawa->lantai }}</option>
        @endforeach
      </select>

      <x-date-picker name="payment_of" label="Pembayaran Tanggal"/>

      <div>Nominal</div>
      <input type="number" name="nominal" id="nominal" class="input w-full"  required>

      <x-upload.single-file name="file"/>

      <button type="submit" class="btn btn-primary w-full">Ajuan</button>
    </form>
    

  </div>
</div>

@include('guest-footer')

<script>
  var toastMessage = document.querySelector('.toast .alert');
  if (toastMessage) {
      setTimeout(function () {
          toastMessage.parentElement.remove();
      }, 5000);
  }
</script>

@endsection