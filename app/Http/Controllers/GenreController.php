<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function showAllGameGenre(){
        $genre = Genre::all();
        return view('addGame', compact('genre'));
    }
}