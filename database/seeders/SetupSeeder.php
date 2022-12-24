<?php

namespace Database\Seeders;

use App\Models\Backend\Setting;
use Illuminate\Database\Seeder;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Setting Seeder
        Setting::create([
            'company_name' => 'Flex Lab',
        ]);
    }
}
