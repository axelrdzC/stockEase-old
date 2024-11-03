@extends('layouts.guest')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100 gap-5" style="max-width: 1000px;">

        <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-center p-4">
            <h1 class="fw-bold mb-3">Bienvenido 👋</h1>
            <p class="mb-4">Today is a new day. It's your day. You shape it. Sign in to start managing your inventory.</p>
            
            @include('layouts.includes.errors')
            
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                           placeholder="Example@email.com" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" class="form-control @error('password') is-invalid @enderror" type="password"
                           name="password" placeholder="Al menos 8 caracteres" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror 
                    <div class="text-end">
                        <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Password?</a>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <button class="btn btn-primary w-100" type="submit">Iniciar Sesión</button>
                </div>

                <div class="d-flex align-items-center justify-content-center mb-3">
                    <span class="mx-2">- o -</span>
                </div>

                <button class="btn btn-outline-secondary text-dark w-100 mb-4">
                    <img src="https://pluspng.com/img-png/google-logo-png-open-2000.png" alt="Google logo" style="width: 20px; margin-right: 8px;">
                    Iniciar Sesión con Google
                </button>
            </form>

            <p class="text-center">Aun no tienes una cuenta? <a href="{{ route('register') }}" class="text-decoration-none">Regístrate</a></p>
        </div>

        <!-- Columna de la imagen -->
        <div class="col-lg-7 col-md-2 d-flex justify-content-center align-items-center">
            <img src="{{ asset('img/login-guy.png') }}" alt="Login illustration" class="img-fluid ml-10" style="max-width: 100%; height: auto;">
        </div>
    </div>
</div>
@endsection
