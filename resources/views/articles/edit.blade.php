@extends('layouts.master')

@section('title', 'Editar artículo')

@section('sidebar')
    <p><a href="{{ route('articles.mine') }}">← Volver a mis artículos</a></p>
@endsection

@section('content')

<h1>Editar artículo</h1>

@if($errors->any())
    <div style="color:red;margin-bottom:15px">
        <ul>
            @foreach($errors->all() as $error)
                <li>⚠️ {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@include('articles.form', [
    'action' => route('articles.update', $article->id),
    'method' => 'PUT',
    'article' => $article
])

@endsection
