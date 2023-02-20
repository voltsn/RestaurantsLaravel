<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ArticleController;

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

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/article/{article:id}', [ArticleController::class, 'show']);

Route::get('/article/create', [ArticleController::class, 'create']);

Route::get('/restaurants', [RestaurantController::class, 'index']);

Route::get('/restaurants/show/{restaurant:id}',[RestaurantController::class, 'show']);

Route::get('/restaurants/create', [RestaurantController::class, 'create']);