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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Minimal dark overrides (no frameworks extra) -->
    <style>
        :root {
            --bg-900: #0f172a; /* gris-azulado profundo */
            --bg-850: #111827; /* gris oscuro */
            --border-700: #374151;
            --text-100: #e5e7eb;
            --text-400: #9ca3af;
            --indigo-600: #4f46e5;
            --indigo-700: #4338ca;
            --green-400: #34d399;
        }
        html, body { height: 100%; }
        body {
            background-color: var(--bg-900);
            color: var(--text-100);
            font-family: 'Nunito', system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial, 'Noto Sans', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', sans-serif;
        }
        /* Navbar minimalista */
        .navbar-dark {
            --bs-navbar-color: rgba(229, 231, 235, 0.8);
            --bs-navbar-hover-color: rgba(229, 231, 235, 1);
            --bs-navbar-brand-color: #e5e7eb;
            --bs-navbar-brand-hover-color: #fff;
        }
        .navbar-gradient-top {
            position: relative;
        }
        .navbar-gradient-top::before {
            content: "";
            position: absolute;
            inset: 0 0 auto 0;
            height: 2px;
            background: linear-gradient(90deg, rgba(79,70,229,.6), rgba(79,70,229,.3), rgba(52,211,153,.5));
            opacity: .9;
        }
        .navbar {
            background-color: var(--bg-850) !important;
            border-bottom: 1px solid var(--border-700);
        }
        .nav-link, .navbar-brand { letter-spacing: .2px; }
        .btn-cta {
            background-color: var(--indigo-600);
            border-color: var(--indigo-600);
        }
        .btn-cta:hover {
            background-color: var(--indigo-700);
            border-color: var(--indigo-700);
        }
        /* Dropdown oscuro */
        .dropdown-menu {
            background-color: #0b1220;
            border: 1px solid var(--border-700);
        }
        .dropdown-item {
            color: var(--text-100);
        }
        .dropdown-item:hover {
            background-color: #121a2b;
            color: #fff;
        }
        /* Contenedor principal */
        main {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
        /* Links y focos */
        a { color: var(--text-100); text-decoration: none; }
        a:hover { color: #fff; }
        .form-control, .form-select {
            background-color: #0b1220;
            color: var(--text-100);
            border-color: var(--border-700);
        }
        .form-control:focus, .form-select:focus {
            background-color: #0d1628;
            color: #fff;
            border-color: var(--indigo-600);
            box-shadow: 0 0 0 .25rem rgba(79,70,229,.2);
        }
        .card {
            background-color: #0b1220;
            border: 1px solid var(--border-700);
            color: var(--text-100);
        }
        .card-header {
            border-bottom-color: var(--border-700);
        }
        /* Utilidad sutil de separación */
        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--border-700), transparent);
            margin: 1rem 0;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-gradient-top">
            <div class="container">
                <a class="navbar-brand fw-semibold" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side -->
                    <ul class="navbar-nav me-auto">
                        {{-- Espacio para enlaces públicos si los necesitas --}}
                    </ul>

                    <!-- Right Side -->
                    <ul class="navbar-nav ms-auto align-items-md-center">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link px-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item ms-md-1 mt-2 mt-md-0">
                                    <a class="btn btn-sm btn-cta px-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        <main>
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
