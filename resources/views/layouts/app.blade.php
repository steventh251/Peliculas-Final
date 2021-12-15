<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Re-Pelis</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireStyles
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        @if (Auth::check())
            <a class="navbar-brand" style="color: rgb(116, 248, 21)" href="#">{{ Auth::user()->nombre_usuario }}</a>
            {{-- <a class="navbar-brand" href="#">{{ Auth::user()->foto }}</a> --}}
        @endif
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            @if (Auth::check())
                <div class="navbar-nav">
                    {{-- <a class="nav-link active" href="{{ route('indexpeliculas') }}"><span
                            class="text-primary">Home</span></a> --}}
                    <a class="nav-link" href="{{ route('indexpeliculas') }}"><span
                            class="text-dark">Peliculas</span></a>
                    <a class="nav-link" href="{{ route('indexUsuarios') }}"><span
                            class="text-light">Usuarios</span></a>
                    <a class="nav-link" href="{{ route('indexventas') }}"><span
                            class="text-warning">Ventas</span></a>
                    <div style="margin-left: 750px;">
                        @livewire('login.logout')
                    </div>

                </div>
            @endif
        </div>
    </nav>

    <div class="container mt-4">
        {{ $slot }}
    </div>



    <script src="https://kit.fontawesome.com/3b4cd12c9c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    @livewireScripts

    <script>
        livewire.on('alerta', mensaje => {

            Swal.fire({
                icon: 'error',
                title: 'Ocurrio un error',
                text: mensaje,
            })
        });
        livewire.on('ventavalidate', mensaje => {

            Swal.fire({
                icon: 'error',
                title: 'Ocurrio un error',
                text: mensaje,
            })
        });
    </script>
</body>

</html>
