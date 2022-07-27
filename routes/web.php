<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('entrada');
});

Route::get('/login', [UsersController::class, 'index'])->name('user.index');

Route::post('/login', [UsersController::class, 'login'])->name('user.login');

Route::get('/logout', [UsersController::class, 'logout'])->name('user.logout');

Route::get('/servicos', function(){
    return view('servicos');
})->name('servicos');

Route::get('/farmacia', [MedicamentoController::class, 'ver'])->name('farmacia.ver');

Route::get('/consultas', [ConsultController::class, 'agendargravar'])->name('consultas.agendargravar');

Route::get('/exames', function(){
    return view('exames');
})->name('examesvet');

Route::get('/agendaconsulta', function(){
    return view('agendaconsulta');
})->name('consultasvet');

Route::get('/contato', function(){
    return view('contato');
})->name('contatos');
