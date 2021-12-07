<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'GameGenre' => 'FPS'
        ]);
        DB::table('genres')->insert([
            'GameGenre' => 'Sports'
        ]);
        DB::table('genres')->insert([
            'GameGenre' => 'Racing'
        ]);
        DB::table('genres')->insert([
            'GameGenre' => 'RPG'
        ]);
        DB::table('genres')->insert([
            'GameGenre' => 'Survival'
        ]);
        DB::table('genres')->insert([
            'GameGenre' => 'MOBA'
        ]);
        DB::table('genres')->insert([
            'GameGenre' => 'Battle Royale'
        ]);
    }
}