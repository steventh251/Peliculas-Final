<?php

namespace App\Http\Livewire\Peliculas;

use App\Models\Pelicula;
use Livewire\Component;
use Livewire\WithPagination;

class IndexPeliculas extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargado = false;

    public function render()
    {
        $peliculas = ($this->cargado == true) ? Pelicula::where('nombre', 'LIKE', '%' . $this->search . '%')
            ->orwhere('genero', 'LIKE', '%' . $this->search . '%')
            ->orwhere('año', 'LIKE', '%' . $this->search . '%')
            ->orwhere('precio', 'LIKE', '%' . $this->search . '%')
            ->paginate(10) : [];
        return view('livewire.peliculas.index-peliculas', compact('peliculas'));
    }

    public function cargando()
    {
        $this->cargado = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
