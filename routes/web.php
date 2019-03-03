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

Route::match(['get','post'],'/admin','AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin/dashboard','AdminController@index');

Route::group(['middleware' => ['auth']], function(){
	Route::get('/admin/dashboard','AdminController@index');
	Route::get('/admin/settings','AdminController@settings');
	Route::get('/admin/view','ManageMenuController@index');
	Route::get('/admin/manage-menu','ManageMenuController@create');
	Route::post('/admin/store-menu','ManageMenuController@store');
	Route::get('/admin/edit-menu/{id}','ManageMenuController@edit');
	Route::post('/admin/update-menu/{id}','ManageMenuController@update');
	Route::get('/admin/delete-menu/{id}','ManageMenuController@destroy');
	Route::get('/admin/unactive-menu/{id}','ManageMenuController@unactive');
	Route::get('/admin/active-menu/{id}','ManageMenuController@active');

});

Route::get('/logout','AdminController@logout');
