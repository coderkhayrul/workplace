<?php

namespace Database\Seeders;

use App\Models\User;
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
            'user_name' => 'superadmin',
            'role_id' => 1,
            'user_slug' => uniqid(),
            'email' => 'superadmin@mail.com',
            'password' => Hash::make('password'),
        ]);

        UserProfile::create([
            'user_id' => $user,
            'full_name' => 'Super Admin',
            'balance' => 0,
        ]);
    }
}
