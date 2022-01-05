<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'gender' => 'male',
            'dob' => Carbon::parse('2000-01-01')
        ]);

        $admin->assignRole('admin');

        
        $admin = User::create([
            'name' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('12345'),
            'gender' => 'male',
            'dob' => Carbon::parse('2000-01-01')
        ]);

        $admin->assignRole('admin');

    }
}
