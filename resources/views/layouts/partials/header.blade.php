<header class="main-header">

    <div class="header-left">
        <a href="/" class="brand">
            <span class="brand-main">BLOG-LARAVEL</span>
            <span class="brand-sub">LARAVEL</span>
        </a>
    </div>

    <nav class="header-nav">
        <a class="nav-link" href="{{ url('/articles') }}">🏠 Blog</a>

        @auth
            <span class="nav-user">👤Usuario: {{ Auth::user()->username }}</span>
            <a class="btn-small purple" href="{{ route('articles.create') }}">Nuevo artículo</a>
            <a class="btn-small grey" href="{{ route('articles.mine') }}">📁 Mis artículos</a>

            <a class="btn-small danger" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                🚪 Salir
            </a>

            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display:none;">
                @csrf
            </form>

        @else
            <a class="btn-small purple" href="{{ route('login') }}">Iniciar sesión</a>
            <a class="btn-small grey" href="{{ route('register') }}">Registro</a>
        @endauth
    </nav>

</header>
