<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">

    <!-- Breeze / Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- HEADER GLOBAL (solo una vez, compartido con login/register) --}}
    @include('layouts.partials.header')

    <main class="page-content">
        @yield('content')
    </main>

</body>
</html>
