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
Route::get('/', 'FrontendController@home')->name('home');

Route::get('item', 'FrontendController@item')->name('item');

Route::get('detail/{id}', 'FrontendController@detail')->name('detail');

Route::get('register', 'FrontendController@register')->name('register');


Route::get('login', 'FrontendController@login')->name('login');

Route::get('checkout', 'FrontendController@checkout')->name('checkout');

Route::get('profile', 'FrontendController@profile')->name('profile');



// Backend--------------------------------------------
Route::middleware('role:admin')->group(function(){

Route::get('dashboard', 'BackendController@dashboard')->name('dashboard');


Route::resource('items','ItemController');//7 (get-4/post-1/put-1/delete-1)
Route::resource('brands','BrandController');

Route::resource('categories','CategoryController');

Route::resource('subcategories','SubcategoryController');
});
//End Backend----------------------------------------


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/getItems', 'FrontendController@getItems')->name('getitems');

Route::resource('orders','OrderController');
