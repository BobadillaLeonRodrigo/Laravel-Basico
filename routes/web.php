<?php

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
    $ap = 'Hola jesus';
    return view('welcome',['ap' => $ap]);
});

Route::get('/holaroy', [\App\Http\Controllers\CategoriesController::class, 'index']);
