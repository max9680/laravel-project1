<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;

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

Route::get('/posts', [PostController::class, 'index']);

Route::get('/dreams', [PostController::class, 'second']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('my_third_page', [MyPlaceController::class, 'third']);
