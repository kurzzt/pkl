@extends('components.admin-sidebar')

@section('title', 'Home - Dashboard')
@section('sub-title', 'Dashboard')
@section('body')


<div class="stats shadow w-full flex flex-col md:flex-row">
  
  <div class="stat">
    <div class="stat-figure text-secondary">
      <span class="material-symbols-outlined">bolt</span>
    </div>
    <div class="stat-title">Total Retributions</div>
    <div class="stat-value">{{ $totalRetribution }}</div>
  </div>
  
  <div class="stat">
    <div class="stat-figure text-secondary">
      <span class="material-symbols-outlined">bolt</span>
    </div>
    <div class="stat-title">Total Rusunawas</div>
    <div class="stat-value">{{ $totalRusun }}</div>
  </div>
  
  <div class="stat">
    <div class="stat-figure text-secondary">
      <span class="material-symbols-outlined">group</span>
    </div>
    <div class="stat-title">Total Users</div>
    <div class="stat-value">{{ $totalUser }}</div>
  </div>
  
</div>

<div class="my-4 bg-base-100 rounded-lg shadow-lg min-w-fit w-1/3 min-h-fit">
  {!! $chart->container() !!}
</div>


<script src="{{ $chart->cdn() }}"></script>
{{ $chart->script() }}
@endsection