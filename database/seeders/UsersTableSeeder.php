<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       \DB::table('users')->insert([
            [
                'name' => 'Ray',
                'email' => 'Ray.g@gmail.com',
                'password' => Hash::make('12345678') ,
                'role' => 'admin',

            ],
            [
                'name' => 'claude',
                'email' => 'claude.r@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'user',
            ]
        ]);

    }

}
