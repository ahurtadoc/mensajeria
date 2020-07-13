<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensajeria App - @yield('title') </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--    Icons-->
    <script src="https://kit.fontawesome.com/e18dffab37.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href={{route('main')}}>Mensajeria app</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href={{route('personal.index')}}>
                            Personal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{route('paquete.index')}}>
                            Paquetes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{route('vehiculo.index')}}>
                            Vehiculos
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    <div class="container-md p-md-4">
        @yield('content')
    </div>


</body>
</html>


