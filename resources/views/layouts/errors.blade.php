<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'E-Commerce')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.customers.navbar')
    
    <main class="pt-16 w-full border">
        @yield('content')
    </main>

    @include('components.customers.footer')
</body>
</html>
