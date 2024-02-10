@extends('components.admin-sidebar')

@section('title', 'Home - Dashboard')
@section('sub-title', 'Dashboard')
@section('body')


<div class="stats shadow w-full">
  
  <div class="stat">
    <div class="stat-figure text-secondary">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    </div>
    <div class="stat-title">Retribution</div>
    <div class="stat-value">87</div>
    <div class="stat-desc">Feb 6th - Mar 6th</div>
  </div>
  
  <div class="stat">
    <div class="stat-figure text-secondary">
      <span class="material-symbols-outlined" class="inline-block w-16 h-16 stroke-current">progress_activity</span>
    </div>
    <div class="stat-title">Unverified</div>
    <div class="stat-value">53</div>
    <div class="stat-desc">Feb 6th - Mar 6th</div>
  </div>
  
  <div class="stat">
    <div class="stat-figure text-secondary">
      <span class="material-symbols-outlined" class="inline-block w-16 h-16 stroke-current">check</span>
    </div>
    <div class="stat-title">Verified</div>
    <div class="stat-value">34</div>
    <div class="stat-desc">Feb 6th - Mar 6th</div>
  </div>
  
</div>

@endsection