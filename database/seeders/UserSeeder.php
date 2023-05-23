<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        
        User::create([
            'name' => 'Vicy',
            'role' => 'admin',
            'email' => 'admin1@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'valen',
            'role' => 'user',
            'email' => 'user1@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('valen123')
        ]);
    }
}
