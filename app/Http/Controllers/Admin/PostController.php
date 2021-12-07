<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::simplePaginate(30);
        return view('admin.blog.index', compact('posts'));
    }

    public function newPost()
    {

        return view('admin.blog.create');
    }

    public function store(PostFormRequest $request)
    {
        if ($request->image->isValid()) {
            $fileName = Str::of($request->title)->slug('-') . '.' . $request->image->getClientOriginalExtension();;
            $imagePath = $request->image->storeAs('posts-images', $fileName);
        }

        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'image' => $imagePath,
            'content' => $request->content,
        ]);

        return back();
    }

    public function edit($id)
    {

        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('admin');
        }

        return view('admin.blog.edit', compact("post"));
    }

    public function update(PostFormRequest $request, $id)
    {

        $post = Post::find($id);

        if ($request->image->isValid()) {
            $fileName = Str::of($request->title)->slug('-') . '.' . $request->image->getClientOriginalExtension();;
            $imagePath = $request->image->storeAs('posts-images', $fileName);
        }

        $post->update([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'image' => $imagePath,
            'content' => $request->content,
        ]);

        return back();
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->route('admin.post')->with('message', 'Post deleted');
    }
}
