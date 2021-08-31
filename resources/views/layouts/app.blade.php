<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba técnica - @yield('title')</title>

    <!--CSS styles-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/_bootswatch.scss')}}" >
    <link rel="stylesheet" href="{{asset('css/_variables.scss')}}" >
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" >

    <!--Fuentes de iconos-->
    <link rel="stylesheet" href="{{asset('style.css')}}" >
    <!-- JavaScript Bundle with Popper -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</head>
<body>
    <!--Header-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">Empresa X</a>

            <div class="callapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="icon-profile"></span> Clientes</a>
                    <div class="dropdown-menu" style="">
                        <a class="dropdown-item" href="/clientes">Ver clientes</a>
                        <a class="dropdown-item" href="/clientes/create">Crear</a>
                        <a class="dropdown-item" href="/getcustomers">Importar desde la API</a>
                    </div>
                </li>
                    <li class="nav-item">
                        <a href="/direcciones" class="nav-link"><span class="icon-addressbook"></span> Direcciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Section-->
    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>