<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Super Admin', 'Admin', 'Seller', 'Buyer',];

        foreach ($roles as $role) {
            Role::create([
                'role_name' => $role,
                'role_slug' => Str::slug($role)
            ]);
        }
    }
}
