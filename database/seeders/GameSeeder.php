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
        DB::table('games')->insert([
            'GenreId' => 4,
            'GameTitle' => 'Ragnarok Online',
            'GameImage' => 'ragnarok.png',
            'GameDesc' => 'RO, is a Korean massive multiplayer online role-playing game or MMORPG created by GRAVITY Co., Ltd. based on the manhwa Ragnarök by Lee Myung-jin. It was first released in South Korea on 2002 August 31 for Microsoft Windows and has since been released in many other locales around the world. It runs on an internally-developed engine known as AEGIS. The game has spawned an animated series, Ragnarok the Animation, and a sequel game, Ragnarök Online II.',
            'GamePrice' => 0,
            'GamePegiRating' => 7
        ]);
        DB::table('games')->insert([
            'GenreId' => 5,
            'GameTitle' => 'Raft',
            'GameImage' => 'raft.jpg',
            'GameDesc' => 'Raft throws you and your friends into an epic oceanic adventure! Alone or together, players battle to survive a perilous voyage across a vast sea! Gather debris, scavenge reefs and build your own floating home, but be wary of the man-eating sharks!',
            'GamePrice' => 175,
            'GamePegiRating' => 3
        ]);
        DB::table('games')->insert([
            'GenreId' => 6,
            'GameTitle' => 'Dota 2',
            'GameImage' => 'dota2.png',
            'GameDesc' => "Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if it's their 10th hour of play or 1,000th, there's always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has taken on a life of its own.",
            'GamePrice' => 0,
            'GamePegiRating' => 12
        ]);
        DB::table('games')->insert([
            'GenreId' => 7,
            'GameTitle' => 'Fortnite',
            'GameImage' => 'fortnite.png',
            'GameDesc' => "Fortnite is a survival game where 100 players fight against each other in player versus player combat to be the last one standing. It is a fast-paced, action-packed game, not unlike The Hunger Games, where strategic thinking is a must in order to survive.",
            'GamePrice' => 30,
            'GamePegiRating' => 16
        ]);
    }
}