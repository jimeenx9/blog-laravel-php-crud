@extends('layouts.master')

@section('title', $article->title)

@section('sidebar')
    <p><a href="{{ route('articles.index') }}">← Volver al listado</a></p>
@endsection

@section('content')

    <h1>{{ $article->title }}</h1>

    <p>
        <small>
            Publicado el {{ date('d/m/Y', strtotime($article->date)) }}
            por <strong>{{ $article->user->username }}</strong>
        </small>
    </p>

    <p style="margin-top: 20px; line-height: 1.6;">
        {{ $article->body }}
    </p>

@endsection
