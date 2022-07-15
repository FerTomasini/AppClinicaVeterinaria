<?php

use App\Http\Controllers\Animal\AnimalController;
use App\Http\Controllers\Consult\ConsultController;
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

Route::get('/dashboard', [AnimalController::class, 'index']);

Route::put('animals/{id}', [AnimalController::class, 'update']);

Route::resource('animals', AnimalController::class);

Route::resource('consults', ConsultController::class);

Route::put('consults/{id}/cancel', [ConsultController::class, 'cancel'])->name('consults.cancel');

Route::get('/login', [UserController::class, 'index'])->name('user.index');

Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');