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
    return view('layouts.template');
});

Route::get('/admin', [controllerBarang::class, 'index']);
Route::post('/view', [controllerBarang::class, 'store']);