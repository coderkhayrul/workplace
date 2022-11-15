<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\UserProfile;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::insertGetId([
            'user_name' => 'admin',
            'role_id' => 1,
            'user_slug' => uniqid(),
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
        ]);
        UserProfile::create([
            'user_id' => $user,
            'full_name' => 'Admin',
            'balance' => 0,
        ]);

    }
}
