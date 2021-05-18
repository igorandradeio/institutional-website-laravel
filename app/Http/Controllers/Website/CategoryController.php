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

    /**
     * Display the specified resource.
     *
     * @param  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('website.category.show', ['category' => $category->load('products')]);

    }

}
