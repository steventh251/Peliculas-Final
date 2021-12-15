<?php

use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Peliculas\CreatePeliculas;
use App\Http\Livewire\Peliculas\DeletePeliculas;
use App\Http\Livewire\Peliculas\EditPeliculas;
use App\Http\Livewire\Peliculas\IndexPeliculas;
use App\Http\Livewire\Peliculas\ShowPeliculas;
use App\Http\Livewire\Usuarios\CreateUsuario;
use App\Http\Livewire\Usuarios\DeleteUsuario;
use App\Http\Livewire\Usuarios\EditUsuario;
use App\Http\Livewire\Usuarios\IndexUsuarios;
use App\Http\Livewire\Usuarios\ShowUsuario;
use App\Http\Livewire\Ventas\CreateVentas;
use App\Http\Livewire\Ventas\IndexVentas;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', Login::class)->name('login');
Route::get('/usuarios/create', CreateUsuario::class)->name("createUsuarios");


//proteger rutas
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', IndexPeliculas::class)->name("indexpeliculass");
    Route::get('/pelicula', IndexPeliculas::class)->name("indexpeliculas");
    Route::get('/pelicula/create', CreatePeliculas::class)->name("createpeliculas");
    Route::get('/pelicula/{pelicula}/edit', EditPeliculas::class)->name('editpeliculas');
    Route::get('/pelicula/{pelicula}/show', ShowPeliculas::class)->name('showpeliculas');
    Route::get('/pelicula/{pelicula}/delete', DeletePeliculas::class)->name('deletepeliculas');

    //rutas modulo usuario

    Route::get('/usuarios', IndexUsuarios::class)->name("indexUsuarios");
    Route::get('/usuarios/{usuario}/edit', EditUsuario::class)->name("editUsuarios");
    Route::get('/usuarios/{usuario}/show', ShowUsuario::class)->name("showUsuarios");
    Route::get('/usuarios/{usuario}/delete', DeleteUsuario::class)->name("deleteUsuarios");

    //modulo ventas
    Route::get('/ventas', IndexVentas::class)->name("indexventas");
    Route::get('/ventas/create', CreateVentas::class)->name('createventas');
});
