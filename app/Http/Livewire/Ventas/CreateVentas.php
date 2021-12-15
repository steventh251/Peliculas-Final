<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Pelicula;
use App\Models\Reloj;
use App\Models\Usuario;
use App\Models\Venta;
use Livewire\Component;

class CreateVentas extends Component
{
    public Venta $venta;

    public function mount()
    {
        $this->venta = new Venta();
    }
    public function render()
    {
        $peliculas = Pelicula::all();
        $usuarios = Usuario::all();
        return view('livewire.ventas.create-ventas', compact('peliculas', 'usuarios'));
    }

    public function crear()
    {
        $datos = $this->validate();
        if ($datos > 0) {
            $this->venta->save();
            return redirect(route('indexventas'));
        } else {
            $this->emit('ventavalidate', 'error, favor de seleccionar usuario y una peli');
        }
    }

    public function rules()
    {
        return rules::rulesventas();
    }
}
