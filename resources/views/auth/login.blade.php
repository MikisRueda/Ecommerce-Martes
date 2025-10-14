@extends('layouts.app')

@section('content')
    <div class="auth-wrap">
        <div class="container container-narrow">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">

                    <!-- Encabezado -->
                    <div class="text-center mb-4">
                        <h1 class="h4 fw-bold mb-2">Iniciar sesión</h1>
                        <p class="text-center text-white mt-3">Accede a tu cuenta para continuar</p>
                    </div>

                    <!-- Tarjeta estilo glass -->
                    <div class="auth-card shadow-sm">
                        <div class="auth-card-body">

                            <form method="POST" action="{{ route('login') }}" novalidate>
                                @csrf

                                <!-- Email -->
                                <div class="form-floating mb-3">
                                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="nombre@correo.com" required autocomplete="email" autofocus>
                                    <label for="email">Correo electrónico</label>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="form-floating mb-2">
                                    <input id="password" type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" placeholder="••••••••"
                                        required autocomplete="current-password">
                                    <label for="password">Contraseña</label>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Remember + Forgot -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            Recuérdame
                                        </label>
                                    </div>

                                    @if (Route::has('password.request'))
                                        <a class="link-underline-light small" href="{{ route('password.request') }}">
                                            ¿Olvidaste tu contraseña?
                                        </a>
                                    @endif
                                </div>

                                <!-- Submit -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-cta btn-lg">
                                        Entrar
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>

                    <!-- Nota inferior -->
                    @if (Route::has('register'))
                        <p class="text-center text-white mt-3">
                            ¿No tienes cuenta?
                            <a href="{{ route('register') }}" class="link-underline-light">Regístrate</a>
                        </p>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- Estilos específicos del login -->
    <style>
        :root {
            --bg-900: #0f172a;
            --panel: #0b1220;
            --border: #2b3446;
            --text-100: #e5e7eb;
            --text-400: #a3a7b0;
            --indigo-600: #4f46e5;
            --indigo-700: #4338ca;
            --green-400: #34d399;
        }

        .auth-wrap {
            padding: 3rem 0 2.25rem;
        }

        .auth-card {
            background: linear-gradient(180deg, rgba(11, 18, 32, .75), rgba(11, 18, 32, .92));
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
        }

        .auth-card::before {
            content: "";
            display: block;
            height: 3px;
            background: linear-gradient(90deg, rgba(79, 70, 229, .65), rgba(79, 70, 229, .28), rgba(52, 211, 153, .45));
        }

        .auth-card-body {
            padding: 1.25rem;
        }

        @media (min-width: 768px) {
            .auth-card-body {
                padding: 1.75rem;
            }
        }

        /* Inputs oscuros con labels flotantes */
        .form-floating>.form-control,
        .form-floating>.form-control:focus {
            background-color: #0d1628;
            color: var(--text-100);
            border-color: var(--border);
        }

        .form-floating>label {
            color: var(--text-400);
        }

        .form-control:focus {
            border-color: var(--indigo-600);
            box-shadow: 0 0 0 .2rem rgba(79, 70, 229, .25);
        }

        .form-check-input {
            background-color: #0d1628;
            border-color: var(--border);
        }

        .form-check-input:checked {
            background-color: var(--indigo-600);
            border-color: var(--indigo-600);
        }

        /* Links y botones */
        .btn-cta {
            background-color: var(--indigo-600);
            border-color: var(--indigo-600);
            color: #fff;
        }

        .btn-cta:hover {
            background-color: var(--indigo-700);
            border-color: var(--indigo-700);
            color: #fff;
        }

        .link-underline-light {
            color: var(--text-100);
            text-decoration: none;
            border-bottom: 1px solid transparent;
            padding-bottom: 1px;
        }

        .link-underline-light:hover {
            color: #fff;
            border-bottom-color: rgba(255, 255, 255, .35);
        }

        /* Estados de error Bootstrap se respetan con is-invalid */
        .invalid-feedback {
            display: block
        }
    </style>
@endsection
