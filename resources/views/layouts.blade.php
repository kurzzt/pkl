<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}">
    <title>@yield('title', 'Diskominfo Kota Semarang')</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body>
  @yield('body')
</body>
</html>