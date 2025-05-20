<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OperatorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'nama' => 'Operator Utama',
            'username' => 'operatorpb',
            'password' => Hash::make('operatorpb12'),
            'email' => 'operatorpb@gmail.com',
            'role' => 'operator',
        ]);
    }
}
