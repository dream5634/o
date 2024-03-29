<?php

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

use App\Product;
use App\Manufacturer;

Route::get('/', function () {
    return redirect('/product');
});

Route::get('/test', function () {
    $products = Product::all();

    dump($products);
});


Route::resource('product', 'ProductController');