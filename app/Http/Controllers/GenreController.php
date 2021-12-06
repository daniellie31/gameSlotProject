<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function showAllGameGenre(){
        $genres = Genre::all();
        return view('addGame', compact('genres'));
    }
}