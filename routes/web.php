<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controllerBarang;

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
    return view('contoh');
});

Route::get('/admin', [controllerBarang::class, 'index']);
Route::post('/add-data', [controllerBarang::class, 'store']);
Route::get('/edit/{id}', [controllerBarang::class, 'viewEdit']);
Route::put('/update/{id}', [controllerBarang::class, 'update']);