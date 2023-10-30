<?php

use App\Http\Controllers\CandidatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VagasController;
use App\Http\Controllers\ApplyController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/candidato', CandidatoController::class);

Route::resource('/vagas', VagasController::class);

Route::resource('/apply', ApplyController::class);

Route::get('/vagas/selecionadas/{userId}', 'ApplyController@vagasSelecionadas');
