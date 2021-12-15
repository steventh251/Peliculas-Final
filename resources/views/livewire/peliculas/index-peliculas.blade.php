<div wire:init="cargando">

    <div class="row mb-3">
        <div class="col-3">
            <div class="input-group">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-labaria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="col-9 ">
            <a href="{{ route('createpeliculas') }}" class="btn btn-success float-right">Nuevo
                <iclass="fas fa-plus-square">
                    </i class=></a>
        </div>
    </div>
    @if (count($peliculas) > 0)

        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Año</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peliculas as $pelicula)


                    <tr>
                        <th scope="row">{{ $pelicula->id }}</th>
                        <td><img style=" border-radius: 20px; width: 60px; height:110px"
                                src="{{ Storage::disk('public')->url($pelicula->foto != null ? $pelicula->foto : 'images/peliculas/default.png') }}"
                                alt=""></td>
                        <td>{{ $pelicula->nombre }}</td>
                        <td>{{ $pelicula->genero }}</td>
                        <td>{{ $pelicula->año }}</td>
                        <td>${{ $pelicula->precio }}</td>
                        <td>
                            <a title="Ver pelicula" style="font-size: 1.3rem" class="text-info mr-1"
                                href="{{ route('showpeliculas', $pelicula) }}"><i class="far fa-eye"></i></a>
                            <a title="Editar pelicula" style="font-size: 1.3rem" class="text-warning mr-1"
                                href="{{ route('editpeliculas', $pelicula) }}"><i class="fas fa-pen-square"></i></a>
                            <a title="Eliminar pelicula" style="font-size: 1.3rem" class="text-danger mr-1"
                                href="{{ route('deletepeliculas', $pelicula) }}"><i class="far fa-trash-alt"></i></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <img class="d-block mx-auto" src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">

        <h2 class="text-center">Cargando</h2>
    @endif
</div>

<body style="background-color:#00bfff">

</body>
