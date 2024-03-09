<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <title>@yield('title', 'Diskominfo Kota Semarang')</title>
  @vite('resources/js/app.js')
  @vite('resources/css/app.css')
</head>

<body class="flex flex-col sm:flex-row">

  <div class="drawer flex sm:hidden bg-base-300 navbar">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
    
    <div class="drawer-content">
      <label for="my-drawer" class="btn drawer-button">
        <span class="material-symbols-outlined">menu</span>
      </label>
      <img src="{{url('/logo-1.png')}}" alt="Logo Diskominfo Semarang" class="mx-4 w-[90px]" />
    </div>
    
    <div class="w-full"></div>
    
    <label class="swap swap-rotate">
      <input id="theme" type="checkbox" class="theme-controller" value="light" />
      <div class="swap-on fill-current w-10 h-10"><span class="material-symbols-outlined">light_mode</span></div>
      <span class="material-symbols-outlined swap-off fill-current w-10 h-10">dark_mode</span>
    </label>
    
    <div class="drawer-side">
      <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
      <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
        <li>
          <a href="{{route('dashboard')}}" class="btn btn-ghost h-fit text-xs py-2">
            <span class="material-symbols-outlined">home</span>Dashboard
          </a>
        </li>

        <li>
          <a href="{{route('retributions.index')}}" class="btn btn-ghost h-fit text-xs py-2">
            <span class="material-symbols-outlined">database</span>Retributions
          </a>
        </li>

        <li>
          <a href="{{route('rusunawas.index')}}" class="btn btn-ghost h-fit text-xs py-2">
            <span class="material-symbols-outlined">database</span>Rusunawa
          </a>
        </li>

        <li>
          <a href="{{route('users.index')}}" class="btn btn-ghost h-fit py-2">
            <span class="material-symbols-outlined">group</span>Users
          </a>
        </li>

        <li>
          <a href="/account" class="btn btn-ghost h-fit py-2">
            <span class="material-symbols-outlined">build</span>Account
          </a>
        </li>

      </ul>
    </div>
  </div>

  <div class="bg-base-300 h-screen w-[120px] flex-col items-center py-5 space-y-5 hidden sm:flex">
    <img src="{{url('/logo-2.png')}}" alt="Logo Diskominfo Semarang" class="w-[50px]" />
    <div class="flex flex-col items-center justify-center space-y-3 mx-3 my-4">
      <a href="{{route('dashboard')}}" class="btn btn-ghost h-fit text-xs py-2">
        <span class="material-symbols-outlined w-full">home</span>Dashboard
      </a>

      <a href="{{route('retributions.index')}}" class="btn btn-ghost h-fit text-xs py-2">
        <span class="material-symbols-outlined w-full">database</span>Retributions
      </a>

      <a href="{{route('rusunawas.index')}}" class="btn btn-ghost h-fit text-xs py-2">
        <span class="material-symbols-outlined w-full">database</span>Rusunawa
      </a>

      <a href="{{route('users.index')}}" class="btn btn-ghost h-fit py-2">
        <span class="material-symbols-outlined w-full">group</span>Users
      </a>

      <a href="/account" class="btn btn-ghost h-fit py-2">
        <span class="material-symbols-outlined w-full">build</span>Account
      </a>

    </div>
    <div class="h-full"></div>

    <label class="swap swap-rotate">
      <input id="theme" type="checkbox" class="theme-controller" value="light" />
      <div class="swap-on fill-current w-10 h-10"><span class="material-symbols-outlined">light_mode</span></div>
      <span class="material-symbols-outlined swap-off fill-current w-10 h-10">dark_mode</span>
    </label>
    
    <a href="" class="btn btn-ghost w-full">
      <span class="material-symbols-outlined">exit_to_app</span>
    </a>
  </div>

  <div class="py-5 px-2 mx-auto space-y-5 container">
    <div class="font-bold text-4xl">@yield('sub-title')</div>
    @yield('body')
  </div>

</body>
</html>