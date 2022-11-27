<?php

use App\Http\Controllers\FlowerController;
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
    return view('welcome');
});

// Route::get('/flowers/{id}', function ($id) {
//     return 'this is a flowers page';
// });

Route::get('/flowers', [FlowerController::class, 'index']);

Route::get('/flowers/create', [FlowerController::class, 'create']);

Route::post('/flowers/create', [FlowerController::class, 'insert']);

Route::get('/flowers/{id}', [FlowerController::class, 'show']);

Route::get('/flowers/update/{id}', [FlowerController::class, 'edit']);

Route::put('/flowers/update/{id}', [FlowerController::class, 'update']);


Route::get('/flowers/delete/{id}', [FlowerController::class, 'destroy']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
