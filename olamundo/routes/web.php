<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CalculadorImcController;
use App\Http\Controllers\CalculoViagemController;
use App\Http\Controllers\CalculoSonoController;    

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::resource('/contato', ContatoController::class);

Route::get('/CalculadorImc', [CalculadorImcController::class, 'mostraFormulario'])->name('imc.calculadorImc');
Route::post('/CalculadorImc', [CalculadorImcController::class, 'processarDados'])->name('imc.resuldadoImc');

Route::get('/calcularViagem', [CalculoViagemController::class, 'mostraFormulario'])->name('viagem.formularioViagem');
Route::post('/calcularViagem', [CalculoViagemController::class, 'processarDados'])->name('viagem.resultadoViagem');

Route::get('/calcularSono', [CalculoSonoController::class, 'mostraFormulario'])->name('sono.formularioSono');
Route::post('/calcularSono', [CalculoSonoController::class, 'processarDados'])->name('sono.resultadoSono');
// Route::get('/contato', function () {
//     return  view('contato.contato');
// });
