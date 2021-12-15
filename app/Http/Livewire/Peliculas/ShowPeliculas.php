<?php

namespace App\Http\Livewire\Peliculas;

use App\Models\Pelicula;
use Livewire\Component;

class ShowPeliculas extends Component
{
    public Pelicula $pelicula;
    public function render()
    {
        return view('livewire.peliculas.show-peliculas');
    }
}
