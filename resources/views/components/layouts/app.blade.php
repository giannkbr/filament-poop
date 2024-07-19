<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    @yield('section')
    @vite('resources/js/app.js')
    @livewireScripts
</body>

</html>