<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Clientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Proveedores</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Categorias</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12 content">
                @yield('content')
            </div>
        </div>

        <div class="row bg-dark">
            <div class="col-12 text-light text-center">
                <small class="d-block"><strong>Introduccion a Laravel</strong></small>
                <small class="d-block"><strong>Edward Pineda</strong></small>
                <small class="d-block"><strong>2024</strong></small>
            </div>
        </div>

    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
</body>

</html>
