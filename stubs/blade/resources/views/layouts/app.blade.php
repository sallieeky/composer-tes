<!doctype html>
<html>
<head>
    <title>@yield('title', 'Laravel')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.nav')

    @yield('content')

    @vite('resources/js/app.js')
</body>
</html>