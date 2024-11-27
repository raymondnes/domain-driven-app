<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Domain-Driven Laravel App</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto p-4">
        @yield('content')
    </div>
    @vite('resources/js/app.js')
</body>
</html>