<?php

namespace App\Http\Livewire\Peliculas;

use App\Models\Pelicula;
use Livewire\Component;
use Livewire\WithFileUploads;

class DeletePeliculas extends Component
{
    use WithFileUploads;

    public Pelicula $pelicula;
    public function render()
    {
        return view('livewire.peliculas.delete-peliculas');
    }

    public function delete(){
        $this->pelicula->delete();
        return redirect(route('indexpeliculas'));
    }
}
