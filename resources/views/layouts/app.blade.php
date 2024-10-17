<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Asegúrate de que esta línea sea correcta -->
    <script src="{{ asset('js/app.js') }}" defer></script> <!-- Enlaza tu JS aquí -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mi Aplicación</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('empresas.index') }}">Empresas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('estudiantes.index') }}">Estudiantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tutores.index') }}">Tutores</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
