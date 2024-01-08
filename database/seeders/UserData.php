<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "name" => "user Khan",
                'username' => 'diner',
                'email' => "user@gmail.com",
                "role" => "user", // Choose 'admin', 'vendor', or 'user'
                "status" => "active",
                "phone" => "01729542809",
                "password" => Hash::make('12345678')
            ],
            [
                "name" => "admin Khan",
                'username' => 'admin',
                'email' => "admin@gmail.com",
                "role" => "admin", // Choose 'admin', 'vendor', or 'user'
                "status" => "active",
                "phone" => "01729542809",
                "password" => Hash::make('12345678')
            ],
            [
                "name" => "vendor Khan",
                'username' => 'diner',
                'email' => "vendor@gmail.com",
                "role" => "vendor", // Choose 'admin', 'vendor', or 'user'
                "status" => "active",
                "phone" => "01729542809",
                "password" => Hash::make('12345678')
            ],
        ]);

    }
}
