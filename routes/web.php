<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
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

Route::get('/profile/{id}', [ProfileController::class, 'showProfile'])->middleware('auth');
Route::post('/profile/{id}',[ProfileController::class,'updateProfile']);

Route::post('/updatePassword/{id}', [ProfileController::class, 'updatePassword']);

Route::get('/addGame', [GenreController::class, 'showAllGameGenre'])->middleware('cekadmin','auth');
Route::get('/manageGameGenre', [GenreController::class, 'manageGameGenre'])->middleware('cekadmin','auth');

Route::post('/add-game',[GameController::class,'insertGame']);

Route::get('/manageGame',[GameController::class,'manageGame'])->middleware('cekadmin', 'auth');

Route::delete('/delete-game/{id}',[GameController::class,'deleteGame']);

Route::get('/details/{id}', [GameController::class,'viewDetails']);

Route::get('/eGame/{id}',[GameController::class,'editGame'])->middleware('cekadmin','auth');
Route::post('/eGame/{id}',[GameController::class,'updateGame']);

Route::get('/updateGameGenre/{id}',[GenreController::class,'viewGameGenre'])->middleware('cekadmin','auth');
Route::post('/updateGameGenre/{id}',[GenreController::class,'editGameGenre']);

Route::get('/search',[GameController::class,'search']);

Route::get('/signIn',[LoginController::class,'log_in'])->name('login')->middleware('guest');
Route::post('/signIn',[LoginController::class,'authenticate']);

Route::post('/signOut',[LoginController::class,'signOut']);

Route::get('/signUp',[RegisterController::class,'sign_up'])->middleware('guest');
Route::post('/signUp',[RegisterController::class,'store']);

Route::get('/cart',[CartController::class,'viewCart'])->middleware('auth');
Route::post('/add-to-cart',[CartController::class,'addToCart'])->middleware('auth');


Route::post('/cart/{id}',[CartController::class,'update']);

Route::delete('/delete-cart/{id}',[CartController::class,'deleteCart']);

Route::post('/checkout',[CartController::class,'checkout']);


