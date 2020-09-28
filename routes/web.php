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
$shoppingCartContoller='App\Http\Controllers\ShoppingCartController';
Route::get('/', $shoppingCartContoller.'@index')->name('homes');
Route::get('/addToCart/{id}', $shoppingCartContoller.'@getAddToCart');
Route::get('/showCart', $shoppingCartContoller.'@getCart');
Route::get('/checkout', $shoppingCartContoller.'@getCheckout');
