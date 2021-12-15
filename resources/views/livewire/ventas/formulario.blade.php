<div class="mb-3">
    <label class="form-label">Adquicision de pelicula</label>
    <select wire:model="venta.id_usuario" class="form-control">
        <option selected value="0">Seleccionar Usuario</option>
        @foreach ($usuarios as $usuario)
            <option value="{{ $usuario->id }}">{{ $usuario->nombre_usuario }}</option>
        @endforeach

    </select>
    @error('venta.id_usuario') <h2>{{ $message }}</h2> @enderror
</div>
<div class="mb-3">
    <label class="form-label">pelicula</label>
    <select wire:model="venta.id_pelicula" class="form-control">
        <option selected value="0">Seleccionar pelicula</option>
        @foreach ($peliculas as $pelicula)
            <option value="{{ $pelicula->id }}">{{ $pelicula->nombre }} - ${{ $pelicula->precio }}</option>
        @endforeach
    </select>
    @error('venta.id_pelicula') <h2>{{ $message }}</h2> @enderror
</div>
