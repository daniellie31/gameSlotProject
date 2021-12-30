<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
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

Route::get('/signIn',function(){
    return view('signIn');
});

Route::get('/signUp',function(){
    return view('signUp');
});

Route::get('/addGame', [GenreController::class, 'showAllGameGenre']);
Route::get('/manageGameGenre', [GenreController::class, 'manageGameGenre']);

Route::post('/add-game',[GameController::class,'insertGame']);

Route::get('/manageGame',[GameController::class,'manageGame']);

Route::delete('/delete-game/{id}',[GameController::class,'deleteGame']);


Route::get('/details/{id}', [GameController::class,'viewDetails']);

Route::get('/eGame/{id}',[GameController::class,'editGame']);
Route::post('/eGame/{id}',[GameController::class,'updateGame']);



// Route::put('/edit-game',[GameController::class,'updateGame']);