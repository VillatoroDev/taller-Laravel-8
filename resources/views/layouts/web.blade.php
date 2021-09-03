<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="shortcut icon" href="{{ asset('images/laravel_logo.ico') }}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta autor="Carlos Villatoro">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Cursos Laravel 8</title>

</head>

<body>
    <header class="shadow-lg">
        <div class="bg-blue-900 py-1">
            <nav class="bg-blue-800 py-2">
                <a href="{{ route('home') }}">
                    <img class="h-16 mx-auto" src="{{ asset('images/logo_blanco.png') }}"
                        alt="Logo de Carlos Villatoro">
                </a>
            </nav>
        </div>
    </header>

    <main class="py-10">
        {{-- AQUÍ VIVE TODO NUETRO CONTENIDO --}}
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <footer class="py-4 text-center">
        @auth
            <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
            <a href="{{ url('login') }}" class="text-sm text-gray-700 underline">Iniciar sesión</a>
            <a href="{{ url('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrarme</a>
        @endauth
    </footer>
</body>

</html>
