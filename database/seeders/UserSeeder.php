<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@animeflix.com',
            'password' => Hash::make('password123'),
            'role_id' => 3,
        ]);

        User::create([
            'username' => 'petugas1',
            'email' => 'petugas@animeflix.com',
            'password' => Hash::make('password123'),
            'role_id' => 2,
        ]);

        User::create([
            'username' => 'user1',
            'email' => 'user@animeflix.com',
            'password' => Hash::make('password123'),
            'role_id' => 1,
        ]);
    }
}