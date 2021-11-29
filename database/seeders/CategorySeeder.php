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
        Category::create([
            'name' => 'Headset gamer',
            'description' => 'Headset gamer',
            'image' => '',
            'slug' => ''
        ]);

        Category::create([
            'name' => 'Mouse gamer',
            'description' => 'Mouse gamer',
            'image' => '',
            'slug' => ''
        ]);
    }
}
