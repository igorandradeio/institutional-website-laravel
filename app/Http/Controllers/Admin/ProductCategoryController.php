<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{

    private $repository;

    public function __construct()
    {
        $this->repository = new Category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::simplePaginate(30);

        return view('admin.product.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->image->isValid()) {
            $fileName = Str::of($request->name)->slug('-') . '.' . $request->image->getClientOriginalExtension();;
            $imagePath = $request->image->storeAs('categories-images', $fileName);
        }

        $category = Category::create([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.category.edit', $category->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->back();
        }

        return view('admin.product.category.edit', compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $imagePath = $category->image;

        if (!$category) {
            return redirect()->back();
        }

        if ($request->image && $request->image->isValid()) {

            if (Storage::exists($category->image)) {
                Storage::delete($category->image);
            }

            $fileName = Str::of($request->name)->slug('-') . '.' . $request->image->getClientOriginalExtension();;
            $imagePath = $request->image->storeAs('categories-images', $fileName);
        }

        $data = [
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->content,
        ];

        $category->update($data);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->update(['slug' => null]);

        if (Storage::exists($category->image)) {
            Storage::delete($category->image);
        }

        $category->delete();

        return redirect()->route('admin.category')->with('message', 'Category deleted');
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');
        $categories = $this->repository->search($request->filter);
        return view('admin.product.category.index', compact('categories', 'filters'));
    }
}
