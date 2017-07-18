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

Route::get('/home', 'PropertyController@index');

/* Property List */
Route::resource('/property_list', 'PropertyController');
Route::post('/property_list/search', 'PropertyController@search');
Route::post('/property_list/list_download', 'PropertyController@list_download');
Route::post('/property_list/single_download', 'PropertyController@single_download');

/* Report */
/* Expiring Properties */
Route::get('/report/expiring_properties', 'PropertyController@expiring_list');
Route::post('/report/expiring_properties_search', 'PropertyController@expiring_search');

/* Tools */
/* Property Type */
Route::resource('/tools/property_type', 'PropertyTypeController');
/* Location */
Route::resource('/tools/location', 'LocationController');


