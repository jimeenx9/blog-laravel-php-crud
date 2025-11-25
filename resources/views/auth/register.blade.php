@extends('layouts.guest')

@section('title', 'Registro')

@section('content')
<div class="auth-card">

    <h2 class="auth-title">Crear cuenta</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label>Usuario</label>
        <input class="auth-input" type="text" name="username" required>

        <label>Email</label>
        <input class="auth-input" type="email" name="email" required>

        <label>Contraseña</label>
        <input class="auth-input" type="password" name="password" required>

        <label>Confirmar contraseña</label>
        <input class="auth-input" type="password" name="password_confirmation" required>

        <button class="btn-auth registrarme">Registrarme</button>

        <p class="auth-links">
            <a href="{{ route('login') }}">¿Ya tienes cuenta? Inicia sesión</a>
        </p>
    </form>

</div>
@endsection
