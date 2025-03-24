<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Rapal',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'admin', // Add this if you have a role column
            'highest_educational_level' =>'.',
        ]);
    }
}

