<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::simplePaginate(30);

        return view('admin.blog.index', compact('posts'));
    }

    public function newPost()
    {

        return view('admin.blog.post');
    }
}
