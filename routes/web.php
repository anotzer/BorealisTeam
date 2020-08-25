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
Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile/index', 'ProfileController@index')->name('profile');
    Route::post('/profile/update/', 'ProfileController@update')->name('profile.update');

    //TODO this is temporary solution for the test admin page and ability
    // need change after review
    Route::get('/admin', 'AdminController@index')->name('admin-panel');
});


//Route::get('/', function () {
//    return view('home_page_test_3');
//})->name('home');

Route::get('/', 'HomeController@index')->name('home');

//Route::post('image/upload', 'ProductimageController@upload')->name('image.upload');
Route::post('create/service', 'AdminController@create_service')->name('create.service');
Route::post('create/category', 'CategoryController@create')->name('create.category');
Route::get('list/view', 'HomeController@list_view')->name('list.view');
Route::post('create/disable-button', 'AdminController@create_dis_button')->name('create_dis_button');
//order page
Route::get('order/page/{id}', 'OrderController@index')->name('order.page');

Route::get('cart/page', 'CartController@index')->name('cart.page');
Route::post('/cart/addToCart', 'CartController@addtocart');
Route::post('/cart/deleteFromCart', 'CartController@deleteFromCart');

