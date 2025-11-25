@extends('layouts.master')

@section('title', 'Artículos del usuario')

@section('sidebar')
    <p><strong>Autor:</strong> {{ $username }} (ID: {{ $id }})</p>
@endsection

@section('content')

    <h1>Artículos de {{ $username }}</h1>

    @if(count($articles) > 0)
        <ul>
            @foreach($articles as $titulo)
                <li>{{ $titulo }}</li>
            @endforeach
        </ul>
    @else
        <p>No existen artículos</p>
    @endif

@endsection
