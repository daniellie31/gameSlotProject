<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Game;
use Database\Seeders\GameSeeder;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function showAllGameGenre(){
        $genres = Genre::all();
        return view('addGame', compact('genres'));
    }
    public function manageGameGenre(){
        $genres = Genre::all();
        return view('manageGameGenre', compact('genres'));
    }
    public function editGenre($id){
        $games = Game::all();
        $genres = Genre::find($id);
        return view('updateGameGenre', compact('genres', 'games'));
    }
}