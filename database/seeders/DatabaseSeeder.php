<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // User::create([
        //     'name' => 'Cong Du 1',
        //     'email' => 'congdu1@gmail.com',
        //     'phone_number'=>'0333666999',
        //     'password' => Hash::make('anhyeuem')
        // ]);
        // Admin::create([
        //     'name' => 'Cong Du AD2',
        //     'email' => 'admin2@gmail.com',
        //     'phone_number'=>'0333666999',
        //     'password' => Hash::make('anhyeuem')
        // ]);
    }
}
