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

Route::get('/', [

    'uses' => 'FrontendController@index',
    'as' => 'index'

]);
Route::get('/products/{id}', [

    'uses' => 'FrontendController@singleProduct',
    'as' => 'products.single'

]);



Route::get('/cart',[

    'uses'=>'ShoppingController@cart',
    'as'=>'cart'

]);
Route::get('/add-to-cart/{product}',[

    'uses'=>'ShoppingController@addToCart',
    'as'=>'add.cart'

]);
Route::get('/remove/{id}',[

    'uses'=>'ShoppingController@removeFromCart',
    'as'=>'remove.cart'

]);

Route::get('/checkout',[

    'uses'=>'ShoppingController@checkout',
    'as'=>'checkout.cart'

]);

Route::get('stripe', 'StripePaymentController@stripe');


Route::post('/checkout',[

    'uses'=>'StripePaymentController@pay',
    'as'=>'cart.checkout'

]);

Route::get('/change-qty/{product}',[

    'uses'=>'ShoppingController@changeQty',
    'as'=>'change_qty'

]);

Route::get('/settings', [

    'uses' => 'SettingsController@index',
    'as' => 'settings.index'

]);



Route::post('/settings/update', [

    'uses' => 'SettingsController@update',
    'as' => 'settings.update'

]);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductsController');

Route::get('/create', [
    'uses' => 'ProductsController@create',
    'as' => 'products.create'
]);
Auth::routes();

Route::get('/results',[

    'uses'=>'FrontendController@results',
    'as'=>'results'

]);

                    