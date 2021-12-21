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
});

Auth::routes(['register' => false]);
