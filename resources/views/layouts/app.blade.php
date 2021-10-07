<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <header class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h1>Hostingar</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.index') }}">Publicaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.posts.create') }}">Crear post</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('auth.logout') }}" method="post">
                            @csrf
                            <button class="btn nav-link" type="submit">Cerrar Sesión | {{ Auth::user()->email}}</button>
                        </form>
                    </li>
                    @elseguest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.formLogin') }}">Ingresar</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @if(Session::has('message.success'))
        <div class="alert alert-success container mt-3 text-center">
            {{ Session::get('message.success') }}
        </div>
        @endif
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <ul class="row mb-0 p-0">
                <li class="col-12 text-center mb-5">
                    <p class="pb-5 border-bottom border-light paragraph">Alojando con orgullo más de 800.000 sitios web desde 2000</p>
                </li>
                <li class="col-md-4 text-right">
                    <ul class="p-0 pr-5 border-right">
                        <li>
                            <p>Portales y Comercios Electrónicos</p>
                        </li>
                        <li>
                            <p>Alessandro Signorini</p>
                        </li>
                        <li>
                            <p>Primer Parcial</p>
                        </li>
                    </ul>
                </li>
                <li class="col-md-4 text-center">
                    <a href="{{ url('/') }}"><img src="{{ url('img/hostingar-logo.png') }}" alt="logotipo de Hostingar"></a>
                </li>
                <li class="col-md-4">
                    <ul class="p-0 pl-5 border-left">
                        <li class="mb-3">
                            <a href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ route('contact') }}">Contacto</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>