@extends('layouts.app')

@section('titulo', 'Iniciar Sesión')

@section('contenido')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow border-dark">
                <div class="card-header bg-dark text-white text-center fw-bold">
                    {{ __('INGRESAR A TIENDA OGA') }}
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-bold small">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control bg-light @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold small">Contraseña</label>
                            <input type="password" name="password" class="form-control bg-light @error('password') is-invalid @enderror" required>
                            @error('password')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label small" for="remember">Recordarme</label>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-especial fw-bold">
                                Entrar
                            </button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-center mt-3">
                                <a class="btn btn-link btn-sm text-muted" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection