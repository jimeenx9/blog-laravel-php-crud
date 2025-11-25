{{-- Formulario reutilizable para crear y editar artículos --}}
<form action="{{ $action }}" method="POST" class="form-card">

    @csrf

    @if($method !== 'POST')
        @method($method)
    @endif

    {{-- Campo título --}}
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" id="title" name="title"
               value="{{ old('title', $article->title ?? '') }}"
               class="form-input">
    </div>

    {{-- Campo contenido --}}
    <div class="form-group">
        <label for="body">Contenido</label>
        <textarea id="body" name="body" rows="6" class="form-textarea">{{ old('body', $article->body ?? '') }}</textarea>
    </div>

    {{-- Campo fecha --}}
    <div class="form-group">
        <label for="date">Fecha</label>
        <input type="date" id="date" name="date"
               value="{{ old('date', $article->date ?? '') }}"
               class="form-input">
    </div>

    <button type="submit" class="btn-form-submit">
        {{ $method === 'POST' ? 'Crear artículo' : 'Guardar cambios' }}
    </button>
</form>
