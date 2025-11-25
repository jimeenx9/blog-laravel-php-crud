@extends('layouts.master')

@section('title', 'Nuevo artículo')

@section('content')

<div class="create-container">

    {{-- Título bonito --}}
    <div class="form-title-block">
        <h2>Crear un nuevo artículo</h2>
        <div class="line"></div>
    </div>

    {{-- Errores --}}
    @if($errors->any())
        <div class="form-errors">
            <ul>
                @foreach($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulario --}}
    @include('articles.form', [
        'action' => route('articles.store'),
        'method' => 'POST',
        'article' => null
    ])

</div>

@endsection
