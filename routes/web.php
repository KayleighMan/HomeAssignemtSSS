<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;

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

Route::get('/cars', [CarsController::class, 'index'])->name('cars.index');

Route::get('/cars/create', [CarsController::class, 'create'])->name('cars.create');

Route::get('/cars/{id}', [CarsController::class, 'show'])->name('cars.show');
