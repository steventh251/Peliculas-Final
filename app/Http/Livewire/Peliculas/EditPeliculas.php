<?php

namespace App\Http\Livewire\Peliculas;

use App\Models\Pelicula;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPeliculas extends Component
{
    use WithFileUploads;
    public Pelicula $pelicula;
    public $foto;

    public function render()
    {
        return view('livewire.peliculas.edit-peliculas');
    }

    public function edit(){
        $this->validate();
        if($this->foto != null){
            if($this->pelicula->foto !=null){
                Storage::disk('public')->delete($this->pelicula->foto);
            }
            $this->pelicula->foto = Storage::disk('public')->put('images/peliculas',$this->foto);
        }
        $this->pelicula->save();
        return redirect(route('indexpeliculas'));
    }
    protected function rules(){
        return rules::rulespelicula();
    }
}
