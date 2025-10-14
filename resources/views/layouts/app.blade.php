<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Tema oscuro blanco + naranja -->
    <style>
        :root{
            --bg-900:#0b0e16;           /* fondo base más neutro para resaltar el naranja */
            --panel:#0e1322;            /* panel dark */
            --border:#2a2f3d;           /* borde sutil */
            --text-100:#ffffff;         /* blanco principal */
            --text-400:#e9edf5;         /* blanco ligeramente atenuado */
            --accent-500:#ff7a1a;       /* naranja base */
            --accent-600:#ff6a00;       /* hover/focus */
            --accent-700:#e65f00;       /* hover fuerte */
            --ring-accent: rgba(255,122,26,.32); /* focus ring accesible */
        }

        html, body { height:100% }
        body{
            background:
                radial-gradient(1200px 800px at 10% -10%, rgba(255,122,26,.14), transparent 60%),
                radial-gradient(900px 600px at 100% 10%, rgba(255,122,26,.12), transparent 55%),
                var(--bg-900);
            color: var(--text-100);
            font-family: 'Nunito', system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Navbar transformada a dark + naranja */
        .navbar{
            background: rgba(14,19,34,.85) !important;
            backdrop-filter: blur(8px) saturate(1.1);
            border-bottom: 1px solid var(--border);
        }
        .navbar::before{
            content:""; position:absolute; inset:0 0 auto 0; height:2px;
            background: linear-gradient(90deg, rgba(255,122,26,.85), rgba(255,122,26,.35), rgba(255,255,255,.45));
        }
        .navbar .navbar-brand,
        .navbar .nav-link{
            color: var(--text-100) !important;
        }
        .navbar .nav-link:hover{ color:#fff !important; }
        .dropdown-menu{
            background-color:#0e1322; border:1px solid var(--border); border-radius:12px; overflow:hidden;
        }
        .dropdown-item{ color:#fff; }
        .dropdown-item:hover{ background:#131a2e; color:#fff; }

        /* Contenido centrado */
        main.app-center{
            min-height: 100vh; display:flex; align-items:center; justify-content:center;
            padding: 2rem 0;
        }
        .container-narrow{ max-width:1040px }

        /* Panel glass con acento naranja */
        .panel{
            background: linear-gradient(180deg, rgba(14,19,34,.78), rgba(14,19,34,.94));
            border: 1px solid var(--border);
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,.35);
            overflow: hidden;
        }
        .panel::before{
            content:""; display:block; height:3px;
            background: linear-gradient(90deg, rgba(255,122,26,.9), rgba(255,122,26,.45), rgba(255,255,255,.5));
        }
        .panel-body{ padding:1.25rem }
        @media (min-width:768px){ .panel-body{ padding:1.75rem } }

        /* Formularios oscuros con acento naranja */
        .form-control, .form-select{
            background-color:#0f162b; color:#fff; border-color:var(--border);
        }
        .form-control:focus, .form-select:focus{
            background-color:#111a31; color:#fff;
            border-color: var(--accent-500);
            box-shadow: 0 0 0 .22rem var(--ring-accent);
        }
        .form-check-input{
            background-color:#0f162b; border-color:var(--border);
        }
        .form-check-input:checked{
            background-color: var(--accent-500); border-color: var(--accent-500);
        }
        .invalid-feedback{ display:block }

        /* Botón CTA naranja */
        .btn-cta{
            background-color: var(--accent-500);
            border-color: var(--accent-500);
            color:#0b0e16;
        }
        .btn-cta:hover{
            background-color: var(--accent-600);
            border-color: var(--accent-600);
            color:#0b0e16;
        }
        .btn-cta:focus{
            box-shadow: 0 0 0 .28rem var(--ring-accent);
        }

        /* Enlaces blancos con subrayado sutil */
        a{ color:#fff; text-decoration:none }
        a:hover{ color:#fff }
        .link-underline-light{
            color:#fff; text-decoration:none; border-bottom:1px solid transparent; padding-bottom:1px;
        }
        .link-underline-light:hover{ border-bottom-color: rgba(255,255,255,.5); }

        /* Texto secundario (si lo necesitas) */
        .muted{ color: var(--text-400) }

        /* Separador sutil */
        .section-divider{
            height:1px; background: linear-gradient(90deg, transparent, var(--border), transparent);
            margin: 1rem 0;
        }

        /* Envoltorio de contenido típico para auth/forms */
        .content-wrap{
            width:100%; max-width:720px; margin:0 auto;
        }
    </style>
</head>

<body>
    <div id="app">
        <!-- Navbar de Laravel UI adaptada a dark + naranja (mismo markup funcional) -->
        <nav class="navbar navbar-expand-md position-sticky top-0 z-3">
            <div class="container">
                <a class="navbar-brand fw-semibold" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon" style="filter: invert(1) brightness(2);"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left -->
                    <ul class="navbar-nav me-auto"></ul>

                    <!-- Right -->
                    <ul class="navbar-nav ms-auto align-items-md-center">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link px-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item ms-md-2 mt-2 mt-md-0">
                                    <a class="btn btn-sm btn-cta px-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle px-2" href="#" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Contenido centrado -->
        <main class="app-center">
            <div class="container container-narrow">
                <div class="panel">
                    <div class="panel-body">
                        <div class="content-wrap">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
                crossorigin="anonymous"></script>
    </div>
</body>

</html>
