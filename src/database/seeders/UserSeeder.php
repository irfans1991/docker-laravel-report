<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'admin',
            'lastname' => 'chenwoo',
            'username' => 'adminit',
            'email' => 'adminit@chenwoofishery.com',
            'birth_date' => now(),
            'gender' => 'male',
            'role' => 'admin',
            'dept' => 'IT',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'remember_token' => Str::random(10),
        ])->assignRole('Administrator');
    }
}
