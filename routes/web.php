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

Route::get('/', 'HomeController@index');
Route::get('/locations', 'HomeController@locations');
Route::get('/about', 'HomeController@about');

Route::get('/products', 'ProductController@index');
Route::get('/products/raw-honey', 'ProductController@honey');
Route::get('/products/beeswax', 'ProductController@beeswax');
Route::get('/products/pollen', 'ProductController@pollen');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store')->name('contact.store');


Route::get('/carousel', 'HomeController@carousel');
Route::get('instagram', 'InstagramController@instagramFeed');
