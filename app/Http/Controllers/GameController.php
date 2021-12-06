<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function showGames(){
        //SELECT * FROM movies
        $games = Game::paginate(5);
        $genres = Genre::all();
        return view('home', compact('games', 'genres'));
      //  return view('home', ['m' =>$movies]);
    }
}