<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(20)->create();
        /*
        Category::create([
            'name' => 'Headset gamer',
            'description' => 'Headset gamer',
            'image' => 'images/categories/headset.jpg'
        ]);

        Category::create([
            'name' => 'Mouse gamer',
            'description' => 'Mouse gamer',
            'image' => 'images/categories/mouse.jpg'
        ]);
        */
    }
}
