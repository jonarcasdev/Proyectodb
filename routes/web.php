<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('auth.login');
});


/*
Route::get('/clientes', function () {
    return view('Clientes.ReadClientes');
});

route::get('/clientes/create',[ClienteController::class,'create']); */

Route::resource('cliente',ClienteController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [ClienteController::class, 'index'])->name('home');
Route::group(['middleware'=>'auth'], function(){
    Route::get('/', [ClienteController::class, 'index'])->name('home');
});

