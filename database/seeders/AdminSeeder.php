<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'nama' => 'Admin',
            'username' => 'adminpb',
            'password' => Hash::make('adminpb12'),
            'email' => 'adminpb@gmail.com',
            'role' => 'admin',
        ]);
    }
}
