<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function showGames(){
        //SELECT * FROM movies
        $games = Game::paginate(5);
        $genres = Genre::all();
        return view('home', compact('games', 'genres'));
      //  return view('home', ['m' =>$movies]);
    }

    public function insertGame(Request $request){
        $games = new Game();
        $games->GameTitle = $request->GameTitle;
        $games->GameDesc = $request->GameDesc;
        $games->GamePrice = $request->GamePrice;
        $games->GenreId = $request->GenreId;
        $games->GamePegiRating = $request->GamePegiRating;
        $file = $request->file('GameImage');

        $imageName = time().'.'.$file->getClientOriginalExtension();

        Storage::putFileAs('public/images',$file ,$imageName);
        
        $games->GameImage = $imageName;
        $games->save();

        return redirect()->back();

    }
}