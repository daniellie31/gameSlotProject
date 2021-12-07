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
        DB::table('games')->insert([
            'GenreId' => 2,
            'GameTitle' => 'FIFA 22',
            'GameImage' => 'fifa22.jpg',
            'GameDesc' => 'Powered by Football™, EA SPORTS™ FIFA 22 brings the game even closer to the real thing with fundamental gameplay advances and a new season of innovation across every mode.',
            'GamePrice' => 500,
            'GamePegiRating' => 12
        ]);
        DB::table('games')->insert([
            'GenreId' => 3,
            'GameTitle' => 'Forza Horizon 5',
            'GameImage' => 'forza5.jpg',
            'GameDesc' => 'Your Ultimate Horizon Adventure awaits! Explore the vibrant and ever-evolving open world landscapes of Mexico with limitless, fun driving action in hundreds of the world’s greatest cars. Begin Your Horizon Adventure today and add to your Wishlist!',
            'GamePrice' => 450,
            'GamePegiRating' => 12
        ]);
    }
}