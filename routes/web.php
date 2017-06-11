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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Property List */
Route::resource('/property_list', 'PropertyListController');
Route::post('/property_list/search', 'PropertyListController@search');
Route::post('/property_list/download', 'PropertyListController@download');

/* Tools */
/* Location */
Route::resource('/tools/location', 'LocationController');


