<div>
    <form wire:submit.prevent="edit">
        <div class="card">
            <div class="card-header">
                Editar Peli
            </div>
            <div class="card-body">
                @include('livewire.peliculas.formulario')
            </div>
            <div class="card-footer text-center">
                <button wire:click="edit" type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                    Guardar</button>
                <a href="{{ route('indexpeliculas') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>




    </form>

</div>
