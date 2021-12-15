<div>
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card text-center">
                <div class="card-tittle">
                    <h2>Informacion de la peli</h2>
                </div>
                <div class="card-header">
                    <img style="width:100px; height:125px" src="{{ Storage::disk('public')->url($pelicula->foto) }}"
                        alt="">
                </div>
                <div class="card-body">
                    <h1>{{ $pelicula->nombre }}</h1>
                    {{ $pelicula->genero }} , {{ $pelicula->año }}
                    <h2 class="mt-5">${{ $pelicula->precio }}</h2>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('editpeliculas', $pelicula) }}" type="submit" class="btn btn-success">Editar</a>
                    <a href="{{ route('indexpeliculas') }}" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
