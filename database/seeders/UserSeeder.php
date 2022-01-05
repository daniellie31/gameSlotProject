<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Dwiki',
            'email' => 'dwikis17@admin.com',
            'password' => Hash::make('admin'),
            'gender' => 'male',
            'dob' => date('1999-04-17'),
            'isadmin' => true
        ]);

        User::create([
            'name' => 'Daniel',
            'email' => 'daniel@admin.com',
            'password' => Hash::make('admin'),
            'gender' => 'male',
            'dob' => date('2001-12-31'),
            'isadmin' => true
        ]);

    }
}