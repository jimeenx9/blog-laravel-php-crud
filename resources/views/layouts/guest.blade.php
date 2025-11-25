<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Autenticación')</title>

    <!-- CSS del blog -->
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">

    <!-- Breeze / Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="auth-body">

    {{-- HEADER GLOBAL --}}
    @include('layouts.partials.header')

    {{-- CONTENEDOR DEL FORMULARIO --}}
    <main class="auth-container">
        @yield('content')
    </main>

</body>
</html>
