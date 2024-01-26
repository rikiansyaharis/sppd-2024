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
            'username' => 'Root',
            'email' => 'root@gmail.com',
            'email_verified_at' => now(),
            'otp' => Str::random(30),
            'password' => Hash::make('root'),
            'is_active' => true,
            'image' => 'default.png',
        ])->assignRole('Developer');

        
        User::create([
            'username' => 'Administrator',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'otp' => Str::random(30),
            'password' => Hash::make(12345),
            'is_active' => true,
            'image' => 'default.png',
        ])->assignRole('Administrator');
    }
}
