@extends('layouts')

@section('body')

@extends('guest-navbar')
<div class="hero h-screen bg-base-200">
  <div class="hero-content text-center">
    <div class="container space-y-4">
      <h1 class="text-5xl font-bold">Profile</h1>
      <p class="py-6">Visi dan Misi Dinas Komunikasi, Informatika, Statistik, dan Persandian Kota Semarang</p>
      
      <div class="collapse bg-base-200">
        <input type="radio" class="peer" name="my-accordion-1"/> 
        <div class="collapse-title bg-base-300 text-xl font-medium peer-checked:bg-secondary peer-checked:text-primary-content">
          Visi Diskominfo
        </div>
        <div class="collapse-content bg-primary text-primary-content peer-checked:bg-secondary peer-checked:text-secondary-content"> 
          <p>Terwujudnya Kota Semarang yang Semakin Hebat berlandaskan Pancasila dalam Bingkai NKRI Yang Ber-Bhineka Tunggal Ika</p>
        </div>
      </div>

      <div class="collapse bg-base-200">
        <input type="radio" class="peer" name="my-accordion-1"/> 
        <div class="collapse-title bg-base-300 text-xl font-medium peer-checked:bg-secondary peer-checked:text-secondary-content">
          Misi Pertama Diskominfo
        </div>
        <div class="collapse-content bg-primary text-primary-content peer-checked:bg-secondary peer-checked:text-secondary-content"> 
          <p>Meningkatkan kualitas & kapasitas <span class="font-bold">Sumber Daya Manusia</span> yang unggul & produktif untuk mencapai kesejahteraan & keadilan sosial</p>
        </div>
      </div>

      <div class="collapse bg-base-200">
        <input type="radio" class="peer" name="my-accordion-1"/> 
        <div class="collapse-title bg-base-300 text-xl font-medium peer-checked:bg-secondary peer-checked:text-secondary-content">
          Misi Kedua Diskominfo
        </div>
        <div class="collapse-content bg-primary text-primary-content peer-checked:bg-secondary peer-checked:text-secondary-content"> 
          <p>Meningkatkan potensi <span class="font-bold">ekonomi</span> lokal yang berdaya saing & stimulasi pembangunan industri, berlandaskan riset & inovasi berdasar prinsip demokrasi ekonomi pancasila</p>
        </div>
      </div>

      <div class="collapse bg-base-200">
        <input type="radio" class="peer" name="my-accordion-1"/> 
        <div class="collapse-title bg-base-300 text-xl font-medium peer-checked:bg-secondary peer-checked:text-secondary-content">
          Misi Ketiga Diskominfo
        </div>
        <div class="collapse-content bg-primary text-primary-content peer-checked:bg-secondary peer-checked:text-secondary-content"> 
          <p>Menjamin kemerdekaan masyarakat menjalankan ibadah, pemenuhan <span class="font-bold">hak dasar</span> & perlindungan <span class="font-bold">kesejahteraan sosial</span> serta hak asasi manusia bagi masyarakat secara berkeadilan</p>
        </div>
      </div>

      <div class="collapse bg-base-200">
        <input type="radio" class="peer" name="my-accordion-1"/> 
        <div class="collapse-title bg-base-300 text-xl font-medium peer-checked:bg-secondary peer-checked:text-secondary-content">
          Misi Keempat Diskominfo
        </div>
        <div class="collapse-content bg-primary text-primary-content peer-checked:bg-secondary peer-checked:text-secondary-content"> 
          <p>Mewujudkan <span class="font-bold">infrastruktur</span> berkualitas yang berwawasan lingkungan untuk mendukung kemajuan kota</p>
        </div>
      </div>

      <div class="collapse bg-base-200">
        <input type="radio" class="peer" name="my-accordion-1"/> 
        <div class="collapse-title bg-base-300 text-xl font-medium peer-checked:bg-secondary peer-checked:text-secondary-content">
          Misi Kelima Diskominfo
        </div>
        <div class="collapse-content bg-primary text-primary-content peer-checked:bg-secondary peer-checked:text-secondary-content"> 
          <p>Menjalankan <span class="font-bold">reformasi birokrasi</span> pemerintahan secara dinamis & menyusun produk hukum yang sesuai nilai-nilai Pancasila dalam kerangka Negara Kesatuan Republik Indonesia</p>
        </div>
      </div>

    </div>
  </div>
</div>
@include('guest-footer')

@endsection