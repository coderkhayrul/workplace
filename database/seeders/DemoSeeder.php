<?php

namespace Database\Seeders;

use App\Models\Backend\Category;
use App\Models\Backend\SubCategory;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Graphice Design', 'Digital Marketing', 'Programming Tech', 'Video Animation'];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => str_slug($category),
            ]);
        }

        $sub_categories1 = ['Website Design', 'Logo Design'];
        $sub_categories2 = ['Local Seo', 'Social Marketing'];
        $sub_categories3 = ['Web Development', 'Desktop Development'];
        $sub_categories4 = ['Video Editing', 'Music Editing'];

        foreach ($sub_categories1 as $row) {
            SubCategory::create([
                'category_id' => 1,
                'name' => $row,
                'slug' => str_slug($row),
            ]);
        }

        foreach ($sub_categories2 as $row) {
            SubCategory::create([
                'category_id' => 2,
                'name' => $row,
                'slug' => str_slug($row),
            ]);
        }

        foreach ($sub_categories3 as $row) {
            SubCategory::create([
                'category_id' => 3,
                'name' => $row,
                'slug' => str_slug($row),
            ]);
        }

        foreach ($sub_categories4 as $row) {
            SubCategory::create([
                'category_id' => 4,
                'name' => $row,
                'slug' => str_slug($row),
            ]);
        }
    }
}
