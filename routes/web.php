<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MyPlaceController;

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

Route::get('/my_page', [MyPlaceController::class, 'index']);

Route::get('my_second_page', [MyPlaceController::class, 'second']);

Route::get('my_third_page', [MyPlaceController::class, 'third']);
