<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
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
            'email' => 'dwikis17@gmail.com',
            'password' => bcrypt('12345'),
            'gender' => 'male',
            'dob' => date('1999-01-01'),
            'isadmin' => true
        ]);

    }
}
