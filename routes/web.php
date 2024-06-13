<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\mensajeroController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\estadoController;

Route::get('/', function () {
    return view('auth.login');
});


/*
Route::get('/clientes', function () {
    return view('Clientes.ReadClientes');
});

route::get('/clientes/create',[ClienteController::class,'create']); */

//Estados
Route::resource('estado',estadoController::class)->middleware('auth');

//Servicios
Route::resource('servicio',ServicioController::class)->middleware('auth');

//Usuarios
Route::resource('usuario',UsuarioController::class)->middleware('auth');

//Sucursales
Route::resource('Sucursal',SucursalController::class)->middleware('auth');


//Mensajeros
Route::resource('mensajero',mensajeroController::class)->middleware('auth');

//CLientes
Route::resource('cliente',ClienteController::class)->middleware('auth');

//Auth::routes();

//Route::get('/home', [ClienteController::class, 'index'])->name('home');
//Route::group(['middleware'=>'auth'], function(){
//    Route::get('/', [ClienteController::class, 'index'])->name('home');
//});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
