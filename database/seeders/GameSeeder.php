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
            'GameImage' => 'battlefield.png',
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
            'GameImage' => 'raft.png',
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
            'GameImage' => 'fortnite.jpg',
            'GameDesc' => "Fortnite is a survival game where 100 players fight against each other in player versus player combat to be the last one standing. It is a fast-paced, action-packed game, not unlike The Hunger Games, where strategic thinking is a must in order to survive.",
            'GamePrice' => 30,
            'GamePegiRating' => 16
        ]);
        DB::table('games')->insert([
            'GenreId' => 1,
            'GameTitle' => 'Valorant',
            'GameImage' => 'valorant.png',
            'GameDesc' => "Valorant is a tactical shooting game involving two teams with 5 players in each team. Every player can sign in and play remotely from anywhere in the world. Every game has 25 rounds and the team that wins 13 of them first wins the game. Players can choose their in-game characters called agents at the start of the game.",
            'GamePrice' => 0,
            'GamePegiRating' => 16
        ]);
        DB::table('games')->insert([
            'GenreId' => 1,
            'GameTitle' => 'Apex Legends',
            'GameImage' => 'apex.png',
            'GameDesc' => "Apex Legends is an online multiplayer battle royale game featuring squads of three players using pre-made characters with distinctive abilities, called 'Legends', similar to those of hero shooters. Alternate modes have been introduced allowing for single and for two-player squads since the game's release.",
            'GamePrice' => 100,
            'GamePegiRating' => 16
        ]);
        DB::table('games')->insert([
            'GenreId' => 3,
            'GameTitle' => 'F1 2021',
            'GameImage' => 'f1.png',
            'GameDesc' => "Enjoy the stunning new features of F1® 2021, including the thrilling story experience 'Braking Point', two-player Career, and get even closer to the grid with 'Real-Season Start'. Take your team to the top in the acclaimed ten-year 'My Team' Career mode, or race head-to-head in split-screen and multiplayer.",
            'GamePrice' => 380,
            'GamePegiRating' => 3
        ]);
        DB::table('games')->insert([
            'GenreId' => 2,
            'GameTitle' => 'NBA 2K21',
            'GameImage' => 'nba.jpg',
            'GameDesc' => "NBA 2K21 is a basketball simulation video game that was developed by Visual Concepts and published by 2K Sports, based on the National Basketball Association (NBA). It is the 22nd installment in the NBA 2K franchise and the successor to NBA 2K20, and the predecessor to NBA 2K22.",
            'GamePrice' => 425,
            'GamePegiRating' => 7
        ]);
        DB::table('games')->insert([
            'GenreId' => 6,
            'GameTitle' => 'League of Legends',
            'GameImage' => 'lol.png',
            'GameDesc' => "League of Legends is one of the world's most popular video games, developed by Riot Games. It features a team-based competitive game mode based on strategy and outplaying opponents. Players work with their team to break the enemy Nexus before the enemy team breaks theirs.",
            'GamePrice' => 0,
            'GamePegiRating' => 12
        ]);
        DB::table('games')->insert([
            'GenreId' => 7,
            'GameTitle' => "Playerunknown's Battlegrounds",
            'GameImage' => 'pubg.png',
            'GameDesc' => "PlayerUnknown's Battlegrounds, better known as PUBG, is a multiplayer battle royale game in which players drop onto an island and fight to be the last one left standing. ... You can choose whether to play solo, duo, or with a squad of up to four players. Games load in with up to 100 players in total.",
            'GamePrice' => 0,
            'GamePegiRating' => 12
        ]);
        DB::table('games')->insert([
            'GenreId' => 1,
            'GameTitle' => "Counter Strike: Global Offensive",
            'GameImage' => 'csgo.png',
            'GameDesc' => "Counter-Strike: Global Offensive (CS:GO) is a multiplayer first-person shooter developed by Valve and Hidden Path Entertainment. It is the fourth game in the Counter-Strike series. ... The game pits two teams, Terrorists and Counter-Terrorists, against each other in different objective-based game modes.",
            'GamePrice' => 10,
            'GamePegiRating' => 18
        ]);
    }
}