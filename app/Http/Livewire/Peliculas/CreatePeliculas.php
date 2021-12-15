<?php

namespace App\Http\Livewire\Peliculas;

use App\Models\Pelicula;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePeliculas extends Component
{
    public Pelicula $pelicula;
    use WithFileUploads;
    public $foto;

    public function mount()
    {
        $this->pelicula = new Pelicula();
    }

    public function render()
    {
        return view('livewire.peliculas.create-peliculas');
    }

    public function create()
    {
        $this->validate();
        if ($this->foto != null) {
            $this->pelicula->foto = Storage::disk('public')->put('images/peliculas', $this->foto);
        }
        $this->pelicula->save();
        return redirect(route('indexpeliculas'));
    }
    protected function rules()
    {

        return rules::rulespelicula();
    }
}
