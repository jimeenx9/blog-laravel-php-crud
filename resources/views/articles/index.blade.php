@extends('layouts.master')

@section('title', 'Listado de artículos')

@section('content')

<div class="panel">

    {{-- TÍTULO GENERAL --}}
    <div class="panel-header">
        <h2>Diario Digital</h2>
    </div>

    {{-- LISTADO DE ARTÍCULOS --}}
    @foreach($articles as $article)
        <article class="article-card">

            <h3 class="article-title">
                <a href="{{ route('articles.show', $article->id) }}">
                    {{ $article->title }}
                </a>
            </h3>

            {{-- CONTENEDOR FLEX PARA ALINEAR TEXTO + BOTONES --}}
            <div class="article-card-content">

                <p class="article-meta">
                    Publicado el 
                    <strong>{{ date('d/m/Y', strtotime($article->date)) }}</strong>
                    — por 
                    <strong>{{ $article->user->username }}</strong>
                </p>

                {{-- BOTONES SOLO SI ES TU ARTÍCULO --}}
                @auth
                    @if(Auth::id() === $article->user_id)
                        <div class="article-actions">

                            <a href="{{ route('articles.edit', $article->id) }}" 
                               class="btn-small edit">
                                ✏️
                            </a>

                            <form action="{{ route('articles.destroy', $article->id) }}" 
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn-small danger"
                                        onclick="return confirm('¿Eliminar este artículo?')">
                                    🗑️
                                </button>
                            </form>

                        </div>
                    @endif
                @endauth

            </div>

        </article>
    @endforeach

</div>

@endsection
