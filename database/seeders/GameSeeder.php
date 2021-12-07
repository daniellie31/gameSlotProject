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
            'GameTitle' => 'Battlefield 1',
            'GameImage' => 'battlefield.jpg',
            'GameDesc' => 'Battlefield™ 1 takes you back to The Great War, WW1, where new technology and worldwide conflict changed the face of warfare forever.',
            'GamePrice' => 0,
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