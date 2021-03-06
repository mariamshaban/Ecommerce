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

Route::get('/main','EcommerceController@main');
Route::get('/shirts','EcommerceController@shirts');
Route::get('/shirt','EcommerceController@shirt');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){

    Route::get('/',function(){
        return view('admin.index');
    });
    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');


});
