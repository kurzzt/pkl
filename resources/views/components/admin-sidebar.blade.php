<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  
  <title>@yield('title', 'Diskominfo Kota Semarang')</title>
  @vite('resources/css/app.css')
</head>
<body class="flex">
  

  <div class="bg-blue-900 h-screen w-[120px] flex flex-col items-center py-5 space-y-5">
    <img src="{{url('/logo-2.png')}}" alt="Logo Diskominfo Semarang" class="w-[50px]"/>
    <div class="flex flex-col items-center justify-center space-y-3 mx-3 my-4">
      <a href="/dashboard" class="btn btn-ghost h-fit text-xs py-2">
        <span class="material-symbols-outlined w-full">home</span>Dashboard
      </a>
      
      <a href="{{route('retributions.index')}}" class="btn btn-ghost h-fit text-xs py-2">
        <span class="material-symbols-outlined w-full">database</span>Retributions
      </a>

      <a href="/rusunawas" class="btn btn-ghost h-fit text-xs py-2">
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
    <a href="" class="btn btn-ghost w-full">
      <span class="material-symbols-outlined">exit_to_app</span>
    </a>
  </div>

  <div class="w-full my-5 mx-8 space-y-5">
    <div class="font-bold text-4xl">@yield('sub-title')</div>
    @yield('body')
  </div>

</body>
</html>