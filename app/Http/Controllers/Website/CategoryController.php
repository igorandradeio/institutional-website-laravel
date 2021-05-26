<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.category.index', [
            'categories' => Category::all(),
        ]);
    }

    public function show($slug)
    {
        $category = Category::whereSlug($slug)->first();
        return view('website.category.show', ['category' => $category->load('products')]);
    }

}
