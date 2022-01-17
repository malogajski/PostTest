<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$qkzaMbF48PjYtT.y4yYyBu6G2HOjxMZKoXr/wcIsioLZRfAa0bRyq', // password
        ]);
    }
}
