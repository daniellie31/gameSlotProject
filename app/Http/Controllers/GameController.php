<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function showGames()
    {
        $games = Game::paginate(10);
        $genres = Genre::all();
        return view('home', compact('games', 'genres'));
    }

    public function insertGame(Request $request)
    {
        $games = new Game();
        $games->GameTitle = $request->GameTitle;
        $games->GameDesc = $request->GameDesc;
        $games->GamePrice = $request->GamePrice;
        $games->GenreId = $request->GenreId;
        $games->GamePegiRating = $request->GamePegiRating;
        $file = $request->file('GameImage');

        $imageName = time().'.'.$file->getClientOriginalExtension();

        Storage::putFileAs('public/images', $file, $imageName);

        $games->GameImage = $imageName;
        $games->save();

        return redirect()->back();
    }

    public function manageGame()
    {
        $games = Game::all();
        $genres = Genre::all();
        return view('manageGame', compact('games', 'genres'));
    }

    public function deleteGame($id)
    {
        $games = Game::find($id);

        Storage::delete('public/images/'.$games->GameImage);
        $games->delete();

        return redirect()->back();
    }

    public function viewDetails($id)
    {
        $games = Game::find($id);
        return view('details', compact('games'));
    }
}