<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => '1',
            'title' => "I'M A POST",
            'image' => 'images/blog/example-post.jpeg',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod rem deleniti fugiat consequatur repudiandae atque officiis et assumenda nihil, enim veritatis dolorem mollitia repellat asperiores ducimus nesciunt excepturi laborum. Mollitia.'
        ]);
    }
}
