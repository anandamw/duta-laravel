<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\PemilihanController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/kandidat', [KandidatController::class, 'index']);
Route::get('/kandidat/create', [KandidatController::class, 'create']);
Route::post('/kandidat/create', [KandidatController::class, 'create_action']);
Route::get('/kandidat/{id}update', [KandidatController::class, 'update']);
Route::post('/kandidat/{id}update', [KandidatController::class, 'update_action']);


Route::get('/pemilihan', [PemilihanController::class, 'index']);
Route::get('/pemilihan/create', [PemilihanController::class, 'create']);
Route::post('/pemilihan/create', [PemilihanController::class, 'create_action']);
Route::get('/pemilihan/{id}update', [PemilihanController::class, 'update']);
Route::post('/pemilihan/{id}update', [PemilihanController::class, 'update_action']);

Route::get('/login', [SessionController::class, 'login']);
Route::get('/register', [SessionController::class, 'register']);

Route::post('/register/create', [SessionController::class, 'register_action']);

Route::get('/login', [SessionController::class, 'login']);

Route::get('/register', [SessionController::class, 'register']);

Route::post('/register/create', [SessionController::class, 'register_action']);
