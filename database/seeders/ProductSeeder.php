<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id' => '1',
            'name' => 'Headset Gamer HP',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ut ullam error quo! Ea, quod? Inventore molestiae enim nobis cupiditate deserunt ut laborum libero non dolorum. Doloremque debitis mollitia ipsam.',
            'image' => 'images/products/headset-gamer-hp.jpg'
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Mouse Gamer Logitech g403',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ut ullam error quo! Ea, quod? Inventore molestiae enim nobis cupiditate deserunt ut laborum libero non dolorum. Doloremque debitis mollitia ipsam.',
            'image' => 'images/products/mouse-gamer-g403.jpg'
        ]);
    }
}
