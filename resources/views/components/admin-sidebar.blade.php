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
  <div class="bg-blue-500 dark:bg-blue-900 hidden sm:flex w-[240px] h-screen relative flex-col">
    <div class="p-5 min-h-fit max-h-[250px] flex flex-col items-center">
      <img src="{{url('/logo-1.png')}}" alt="Logo Diskominfo Semarang" class="h-fit"/>
      <!-- <img src="{{url('/logo-2.png')}}" alt="Logo Diskominfo Semarang" class="w-[80px]"/> -->
    </div>
    <div class="">
      <div class="flex flex-col space-y-3 mx-3 my-4">
        <a class="btn btn-ghost" href="/dashboard">Dashboard</a>
        <a class="btn btn-ghost" href="/retributions">Retributions</a>
        <a class="btn btn-ghost" href="/rusunawa">Rusunawa</a>
        <a class="btn btn-ghost" href="/users">Users</a>
        <a class="btn btn-ghost" href="/roles">Roles</a>
      </div>
    </div>
    <div class="h-full "></div>
    <a href="" class="btn btn-ghost">Sign Out</a>
  </div>

  <div class="sm:hidden bg-blue-900 h-screen w-[120px] flex flex-col items-center py-5 space-y-5">
    <img src="{{url('/logo-2.png')}}" alt="Logo Diskominfo Semarang" class="w-[50px]"/>
    <div class="flex flex-col items-center justify-center space-y-3 mx-3 my-4">
      <a href="/dashboard" class="btn btn-ghost h-fit text-xs py-2">
        <span class="material-symbols-outlined w-full">home</span>Dashboard
      </a>
      
      <a href="/retributions" class="btn btn-ghost h-fit text-xs py-2">
        <span class="material-symbols-outlined w-full">database</span>Retributions
      </a>

      <a href="/rusunawa" class="btn btn-ghost h-fit text-xs py-2">
        <span class="material-symbols-outlined w-full">database</span>Rusunawa
      </a>

      <a href="/users" class="btn btn-ghost h-fit py-2">
        <span class="material-symbols-outlined w-full">group</span>Users
      </a>

      <a href="roles" class="btn btn-ghost h-fit py-2">
        <span class="material-symbols-outlined w-full">build</span>Roles
      </a>

      <a href="roles" class="btn btn-ghost h-fit py-2">
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