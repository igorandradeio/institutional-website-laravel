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

/* FRONT END */
// Home

Route::namespace("App\Http\Controllers\Website")->group(function () {
    Route::get("/", "HomeController")->name("website.home");
    Route::get("products", "CategoryController@index")->name("website.products");
    Route::get("products/{slug}", "CategoryController@show")->name("website.products.category");
    Route::get("blog", "BlogController")->name("website.blog");
    Route::view("about", "website.about.index")->name("website.about");
    Route::get("contact","ContactController@index")->name("website.contact");
    Route::post("contact","ContactController@form")->name("website.contact.form");

});
/* END FRONT END */ 
