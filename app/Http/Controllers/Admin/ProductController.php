<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new Product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::simplePaginate(30);

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.product.create', compact('categories'));
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
            $fileName = Str::of($request->name)->slug('-') . '.' . $request->image->getClientOriginalExtension();
            $imagePath = $request->image->storeAs('products-images', $fileName);
        }


        $product = Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' =>  $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.product.edit', $product->id);
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
        $categories = Category::all();
        $product = Product::find($id);

        if (!$product)
            return redirect()->back();

        return view('admin.product.edit', compact('product', 'categories'));
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
        $product = Product::find($id);
        $imagePath = $product->image;

        if (!$product) {
            return redirect()->back();
        }

        if ($request->image && $request->image->isValid()) {

            if (Storage::exists($product->image)) {
                Storage::delete($product->image);
            }

            $fileName = Str::of($request->name)->slug('-') . '.' . $request->image->getClientOriginalExtension();;
            $imagePath = $request->image->storeAs('products-images', $fileName);
        }

        $data = [
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' =>  $request->description,
            'image' => $imagePath,
        ];

        $product->update($data);

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
        $product = Product::find($id);

        $product->update(['slug' => null]);

        if (Storage::exists($product->image)) {
            Storage::delete($product->image);
        }

        $product->delete();

        return redirect()->route('admin.product')->with('message', 'Product deleted');
    }
}
