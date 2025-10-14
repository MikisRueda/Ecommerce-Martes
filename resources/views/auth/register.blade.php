@extends('layouts.app')

@section('content')
<div class="auth-wrap">
    <div class="container container-narrow">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">

                <!-- Encabezado -->
                <div class="text-center mb-4">
                    <h1 class="h4 fw-bold mb-2">Crear cuenta</h1>
                    <p class="text-center text-white mt-3">Regístrate para comenzar</p>
                </div>

                <!-- Tarjeta estilo glass -->
                <div class="auth-card shadow-sm">
                    <div class="auth-card-body">
                        <form method="POST" action="{{ route('register') }}" novalidate>
                            @csrf

                            <!-- Nombre -->
                            <div class="form-floating mb-3">
                                <input
                                    id="name"
                                    type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Tu nombre"
                                    required
                                    autocomplete="name"
                                    autofocus
                                >
                                <label for="name">Nombre</label>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="form-floating mb-3">
                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="nombre@correo.com"
                                    required
                                    autocomplete="email"
                                >
                                <label for="email">Correo electrónico</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="form-floating mb-3">
                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="••••••••"
                                    required
                                    autocomplete="new-password"
                                >
                                <label for="password">Contraseña</label>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-floating mb-4">
                                <input
                                    id="password-confirm"
                                    type="password"
                                    name="password_confirmation"
                                    class="form-control"
                                    placeholder="••••••••"
                                    required
                                    autocomplete="new-password"
                                >
                                <label for="password-confirm">Confirmar contraseña</label>
                            </div>

                            <!-- Submit -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-cta btn-lg">
                                    Crear cuenta
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Enlace a login -->
                @if (Route::has('login'))
                <p class="text-center mt-3 make-white">
                    ¿Ya tienes cuenta?
                    <a href="{{ route('login') }}" class="link-underline-light">Inicia sesión</a>
                </p>
                @endif

            </div>
        </div>
    </div>
</div>

<!-- Estilos específicos del registro (coherentes con el login) -->
<style>
    :root{
        --bg-900:#0f172a;
        --panel:#0b1220;
        --border:#2b3446;
        --text-100:#e5e7eb;
        --text-400:#a3a7b0;
        --indigo-600:#4f46e5;
        --indigo-700:#4338ca;
        --green-400:#34d399;
    }

    .auth-wrap{ padding: 3rem 0 2.25rem; }
    .auth-card{
        background: linear-gradient(180deg, rgba(11,18,32,.75), rgba(11,18,32,.92));
        border: 1px solid var(--border);
        border-radius: 16px;
        overflow: hidden;
    }
    .auth-card::before{
        content:"";
        display:block;
        height:3px;
        background: linear-gradient(90deg, rgba(79,70,229,.65), rgba(79,70,229,.28), rgba(52,211,153,.45));
    }
    .auth-card-body{ padding: 1.25rem; }
    @media (min-width: 768px){
        .auth-card-body{ padding: 1.75rem; }
    }

    /* Inputs oscuros + floating labels */
    .form-floating>.form-control,
    .form-floating>.form-control:focus{
        background-color:#0d1628;
        color:var(--text-100);
        border-color:var(--border);
    }
    .form-floating>label{ color:var(--text-400); }
    .form-control:focus{
        border-color: var(--indigo-600);
        box-shadow: 0 0 0 .2rem rgba(79,70,229,.25);
    }
    /* Estados de error Bootstrap */
    .invalid-feedback{ display:block }

    /* Botón principal */
    .btn-cta{
        background-color: var(--indigo-600);
        border-color: var(--indigo-600);
        color:#fff;
    }
    .btn-cta:hover{
        background-color: var(--indigo-700);
        border-color: var(--indigo-700);
        color:#fff;
    }

    /* Links */
    .link-underline-light{
        color: var(--text-100);
        text-decoration: none;
        border-bottom: 1px solid transparent;
        padding-bottom: 1px;
    }
    .link-underline-light:hover{
        color:#fff;
        border-bottom-color: rgba(255,255,255,.35);
    }

    /* Párrafo inferior en blanco explícito */
    .make-white{ color:#fff !important; }
</style>
@endsection
