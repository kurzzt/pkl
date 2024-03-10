<div class="navbar bg-base-100 z-40 sticky top-0 left-0">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Beranda</a></li>
        <li><a>Layanan</a></li>
        <li><a>Profile</a></li>
      </ul>
    </div>
    <img src="{{url('/logo-1.png')}}" alt="Logo Diskominfo Semarang" class="mx-4 w-[90px]" />
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a>Beranda</a></li>
      <li><a>Layanan</a></li>
      <li><a>Profile</a></li>
    </ul>
  </div>

  @auth
    <div class="navbar-end">
      <div class="hidden lg:block">Welcome, {{ auth()->user()->name }}</div>
      <div>
        <a href="{{ route('dashboard') }}" type="submit" class="btn btn-ghost w-full">
          <span class="material-symbols-outlined">dashboard</span>
        </a>
      </div>
    </div>
  @else
    <div class="navbar-end">
      <a href="{{ route('auth.login')}}" class="btn">Login</a>
    </div>
  @endauth
</div>