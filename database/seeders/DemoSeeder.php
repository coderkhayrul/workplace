<?php

namespace Database\Seeders;

use App\Models\Backend\Category;
use Illuminate\Database\Seeder;
use App\Models\Backend\Setting;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CATEGORY SEEDER
        $categories = ['Graphice Design', 'Digital Marketing', 'Programming Tech', 'Video Animation', 'Website Design', 'Writing Translation', 'Business', 'Fun & Lifestyle', 'Music & Audio', 'Programming Tech', 'Video Animation', 'Website Design', 'Writing Translation', 'Business', 'Fun & Lifestyle', 'Music & Audio'];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => str_slug($category),
                'status' => 1,
            ]);
        }
    }
}
