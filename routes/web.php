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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


 //voor Categories
 Route::get('/categories', 'CategoryController@index');
 Route::get('categories/{id}/products', 'CategoryController@display');
 


//voor articles
 route::get('/products', 'ProductsController@index');
 Route::get('products/{id}/details', 'ProductsController@display');

 //voor shoppingcart
Route::get('products/{id}', 'CartController@getProduct');
Route::get('/addProduct', 'CartController@addProduct');
Route::get('shopping-cart', 'CartController@getShoppingCart');

