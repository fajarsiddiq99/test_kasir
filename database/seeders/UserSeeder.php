<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder

{
    public function run(): void
    {
        DB::table('users')->insert([
            'name'     => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role'     => 'admin',
        ]);
        DB::table('users')->insert([
            'name'     => 'kasir',
            'email'    => 'kasir@gmail.com',
            'password' => Hash::make('password'),
            'role'     => 'user',
        ]);
    }
}
