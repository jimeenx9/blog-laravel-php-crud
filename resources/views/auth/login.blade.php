@extends('layouts.guest')

@section('title', 'Iniciar sesión')

@section('content')
<div class="auth-card">

    <h2 class="auth-title">Iniciar sesión</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label>Email</label>
        <input class="auth-input" type="email" name="email" required autofocus>

        <label>Contraseña</label>
        <input class="auth-input" type="password" name="password" required>

        <button class="btn-auth registrarme">Entrar</button>

        <p class="auth-links">
            <a href="{{ route('register') }}">¿No tienes cuenta? Regístrate</a>
        </p>
    </form>

</div>
@endsection
