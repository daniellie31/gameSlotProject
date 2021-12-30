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
    public function viewGameGenre($id){
        $genres = Genre::find($id);
        return view('updateGameGenre', compact('genres'));
    }
    public function editGameGenre(Request $request){
        $genres = Genre::find($request->id);
        $genres->GameGenre = $request->GameGenre;
        $genres->save();
        return redirect('/');
    }
}