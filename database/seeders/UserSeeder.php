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

        // SELLER
        $seller = User::insertGetId([
            'user_name' => 'Seller',
            'role_id' => 3,
            'user_slug' => uniqid(),
            'email' => 'seller@mail.com',
            'password' => Hash::make('password'),
        ]);

        UserProfile::create([
            'user_id' => $seller,
            'full_name' => 'Seller',
            'balance' => 0,
        ]);

        // BUYER
        $buyer = User::insertGetId([
            'user_name' => 'Buyer',
            'role_id' => 4,
            'user_slug' => uniqid(),
            'email' => 'buyer@mail.com',
            'password' => Hash::make('password'),
        ]);

        UserProfile::create([
            'user_id' => $buyer,
            'full_name' => 'Buyer',
            'balance' => 0,
        ]);
    }
}
