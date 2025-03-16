<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CalculadorImcController;    

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/contato', ContatoController::class);

Route::resource('/CalculadorImc', CalculadorImcController::class);

// Route::get('/contato', function () {
//     return  view('contato.contato');
// });
