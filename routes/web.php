<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\UserController;
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


Route::get('/login', [UserController::class, 'index'])->name('user.index');

Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::get('/servicos', function(){
    return view('servicos');
})->name('servicos');

Route::get('/consultas', [ConsultController::class, 'agendar'])->name('consultas');