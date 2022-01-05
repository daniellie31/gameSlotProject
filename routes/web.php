<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use App\Models\Cart;
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

Route::get('/', [GameController::class, 'showGames']);

Route::get('/addGame', [GenreController::class, 'showAllGameGenre'])->middleware('role:admin');
Route::get('/manageGameGenre', [GenreController::class, 'manageGameGenre'])->middleware('role:admin');

Route::post('/add-game',[GameController::class,'insertGame']);

Route::get('/manageGame',[GameController::class,'manageGame'])->middleware('role:admin');

Route::delete('/delete-game/{id}',[GameController::class,'deleteGame']);

Route::get('/details/{id}', [GameController::class,'viewDetails']);

Route::get('/eGame/{id}',[GameController::class,'editGame'])->middleware('role:admin');
Route::post('/eGame/{id}',[GameController::class,'updateGame']);

Route::get('/updateGameGenre/{id}',[GenreController::class,'viewGameGenre'])->middleware('role:admin');
Route::post('/updateGameGenre/{id}',[GenreController::class,'editGameGenre']);

Route::get('/search',[GameController::class,'search']);

Route::get('/signIn',[LoginController::class,'log_in'])->name('login')->middleware('guest');
Route::post('/signIn',[LoginController::class,'authenticate']);

Route::post('/signOut',[LoginController::class,'signOut']);

Route::get('/signUp',[RegisterController::class,'sign_up'])->middleware('guest');
Route::post('/signUp',[RegisterController::class,'store']);

Route::get('/cart',[CartController::class,'viewCart'])->middleware('auth');
Route::post('/add-to-cart',[CartController::class,'addToCart']);