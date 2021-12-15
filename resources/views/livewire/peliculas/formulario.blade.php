<div class="row">
    <div class="col-4 text-center">
        <div class="container">


            @if ($foto != null)
                <img style="border-radius: 120px; width: 235px; height:335px " src="{{ $foto->temporaryUrl() }}" alt="">
            @else
                <img style="width: 235px; height:335px "
                    src="{{ Storage::disk('public')->url($pelicula->foto != null ? $pelicula->foto : 'images/peliculas/default.png') }}"
                    alt="">


            @endif
            <form>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Subir Imagen</label>
                    <input wire:model="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                    @error('foto') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </form>
        </div>
    </div>
    <div class="col-8 mx-auto">
        <div class="container">
            <div class="form-group">
                <label>Nombre</label>
                <input wire:model="pelicula.nombre" type="text" class="form-control">
                @error('pelicula.nombre') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Genero</label>
                <input wire:model="pelicula.genero" type="text" class="form-control">
                @error('pelicula.genero') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Año</label>
                <input wire:model="pelicula.año" type="number" class="form-control" maxlength="4">
                @error('pelicula.año') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Precio</label>
                <input wire:model="pelicula.precio" type="text" class="form-control">
                @error('pelicula.precio') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
</div>
