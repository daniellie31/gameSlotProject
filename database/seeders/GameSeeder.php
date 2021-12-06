<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'GenreId' => 1,
            'GameTitle' => 'Counter Strike: Global Offensive',
            'GameImage' => 'csgo.jpg',
            'GameDesc' => 'Counter-Strike Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS:GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).',
            'GamePrice' => 100,
            'GamePegiRating' => 18
        ]);
    }
}