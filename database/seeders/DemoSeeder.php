<?php

namespace Database\Seeders;

use App\Models\Backend\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
    }
}
