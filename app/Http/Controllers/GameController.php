<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{

    public function search(Request $request){
        $keyword = $request->keyword;

        $games = Game::where('GameTitle', 'LIKE' ,"%$keyword%")->paginate(5)->appends(['keyword' => $keyword]);


        return view('home', compact('games'));

    }

    public function showGames()
    {
        $games = Game::paginate(10);
        $genres = Genre::all();
        return view('home', compact('games', 'genres'));
    }

    public function insertGame(Request $request)
    {
        $games = new Game();

        $validated = $request->validate([
            'GameTitle' => 'required',
            'GameDesc' => 'required',
            'GamePrice' => 'required',
            'GenreId' => 'required',
            'GamePegiRating' => 'required',
            'GameImage' => 'required',
        ]);

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

        // return redirect()->back();
        return redirect('/')->with('success', 'Game berhasil ditambahkan!');
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

    public function updateGame(Request $request , $id){
        $games = Game::find($id);
        $games->GameTitle = $request->GameTitle != null ? $request->GameTitle : $games->GameTitle;
        $games->GameDesc = $request->GameDesc != null ? $request->GameDesc :  $games->GameDesc;
        $games->GamePrice = $request->GamePrice != null ? $request->GamePrice : $games->GamePrice;
        if($request->GenreId == 0){
            $genres = new Genre();
            $genres->GameGenre = $request->genrename;
            $genres->save();
            $games->GenreId = $genres->id;

        }else{
            $games->GenreId = $request->GenreId;
        }
    
        $games->GamePegiRating = $request->GamePegiRating;
        $file = $request->file('GameImage');

        if($file != null){
            $imageName = time().'.'.$file->getClientOriginalExtension();

            Storage::putFileAs('public/images', $file, $imageName);

            $games->GameImage = $imageName;
        }

        $games->save();
        return redirect('/');
    }

    public function editGame($id){
        $games = Game::find($id);
        $genres = Genre::all();
        return view('eGame', compact('games','genres'));
    }

}