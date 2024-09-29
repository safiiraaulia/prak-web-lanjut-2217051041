<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileController1;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/data/{nama}/{kelas}/{npm}', [ProfileController::class, 'profile']);

Route::get('/user/profile', [UserController::class, 'profile']);

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

Route::get('/user', [UserController::class, 'index']);