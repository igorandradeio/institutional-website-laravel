<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Public Routes
Route::namespace("App\Http\Controllers\Website")->group(function () {

    Route::get("/", "HomeController")->name("website.home");
    Route::view("about", "website.about.index")->name("website.about");

    Route::get("categories", "CategoryController@index")->name("website.categories");
    Route::get("categories/{slug}", "CategoryController@show")->name("website.category.show");

    Route::get("product", "ProductController@index")->name("website.product");
    Route::get("product/{slug}", "ProductController@show")->name("website.product.show");

    Route::get("blog", "BlogController")->name("website.blog");
    Route::get("blog/{slug}", "PostController@show")->name("website.blog.show");

    Route::get("contact", "ContactController@index")->name("website.contact");
    Route::post("contact", "ContactController@form")->name("website.contact.form");
});

//Auth Routes
Route::namespace("App\Http\Controllers\Admin")->middleware(['auth', 'check.is.admin'])->group(function () {
    Route::get("/admin", "HomeController@index")->name('admin');
    Route::get("/admin/post", "PostController@index")->name('admin.post');
    Route::any("/admin/post/search", "PostController@search")->name('admin.post.search');
    Route::post("/admin/post/create'", "PostController@store")->name('admin.post.store');
    Route::get("/admin/post/edit/{id}", "PostController@edit")->name('admin.post.edit');
    Route::put("/admin/post/update/{id}", "PostController@update")->name('admin.post.update');
    Route::get("/admin/post/register", "PostController@newPost")->name('admin.post.register');
    Route::delete("/admin/post/destroy/{id}", "PostController@destroy")->name('admin.post.destroy');
    Route::get("/admin/category", "ProductCategoryController@index")->name('admin.category');
    Route::any("/admin/category/search", "ProductCategoryController@search")->name('admin.category.search');
    Route::get("/admin/category/edit/{id}", "ProductCategoryController@edit")->name('admin.product.category.edit');
    Route::put("/admin/category/update/{id}", "ProductCategoryController@update")->name('admin.product.category.update');
    Route::delete("/admin/category/destroy/{id}", "ProductCategoryController@destroy")->name('admin.product.category.destroy');
    Route::post("/admin/category/create'", "ProductCategoryController@store")->name('admin.product.category.store');
    Route::get("/admin/category/register", "ProductCategoryController@create")->name('admin.category.create');
    Route::get("/admin/product", "ProductController@index")->name('admin.product');
    Route::get("/admin/product/register", "ProductController@create")->name('admin.product.create');
    Route::post("/admin/product/create'", "ProductController@store")->name('admin.product.store');
    Route::get("/admin/product/edit/{id}", "ProductController@edit")->name('admin.product.edit');
    Route::put("/admin/product/update/{id}", "ProductController@update")->name('admin.product.update');
    Route::delete("/admin/product/destroy/{id}", "ProductController@destroy")->name('admin.product.destroy');
    Route::any("/admin/category/search", "ProductController@search")->name('admin.product.search');
});

Auth::routes(['register' => false]);
