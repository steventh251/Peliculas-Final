<?php

namespace App\Http\Livewire\Peliculas;

class rules
{
    public static function rulespelicula(){
        return [
            'pelicula.nombre'=> 'required',
            'pelicula.genero'=> 'required',
            'pelicula.año'=>'required|numeric',
            'pelicula.precio'=>'required|numeric',
            'foto'=>'nullable|image'
            ];
    }

}
