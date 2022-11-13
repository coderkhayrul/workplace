<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'full_name' => 'Admin',
            'user_name' => 'admin',
            'role_id' => 1,
            'user_slug' => uniqid(),
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
