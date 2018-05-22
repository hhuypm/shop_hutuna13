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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[
    'as' => 'home',
    'uses' => 'PageController@getIndex'
]);
Route::get('products',[
    'as' => 'products',
    'uses' => 'PageController@getProducts'
]);
Route::get('product-detail/{product_id}',[
    'as' => 'product-detail',
    'uses' => 'PageController@getProductPage'
]);
Route::get('about',[
    'as' => 'about',
    'uses' => 'PageController@getAbout'
]);
Route::get('checkout',[
    'as' => 'checkout',
    'uses' => 'PageController@getCheckout'
]);
Route::get('mycart',[
    'as' => 'mycart',
    'uses' => 'PageController@getMycart'
]);