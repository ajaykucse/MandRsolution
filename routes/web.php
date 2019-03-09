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
	
	/*Admin Routes for login and setting*/
	Route::get('/admin/dashboard','AdminController@index');
	Route::get('/admin/settings','AdminController@settings');

	/*Routes for manage menu*/
	Route::get('/admin/view-menu','ManageMenuController@index');
	Route::get('/admin/manage-menu','ManageMenuController@create');
	Route::post('/admin/store-menu','ManageMenuController@store');
	Route::get('/admin/edit-menu/{id}','ManageMenuController@edit');
	Route::post('/admin/update-menu/{id}','ManageMenuController@update');
	Route::get('/admin/delete-menu/{id}','ManageMenuController@destroy');
	Route::get('/admin/unactive-menu/{id}','ManageMenuController@unactive');
	Route::get('/admin/active-menu/{id}','ManageMenuController@active');

	/*Routes for menu items*/
	Route::get('/admin/view-menu-item','MenuItemController@index');
	Route::get('admin/menu-item','MenuItemController@create');
	Route::post('/admin/store-menu-item','MenuItemController@store');
	Route::get('/findMenuItemName','MenuItemController@findMenuItemName');
	Route::get('/admin/delete-menu-item/{id}','MenuItemController@destroy');
	Route::get('/admin/edit-menu-item/{id}','MenuItemController@edit');
	Route::post('/admin/update-menu-item/{id}','MenuItemController@update');
	Route::get('/admin/publish-menu-item/{id}','MenuItemController@publish');
	Route::get('/admin/is-front/{id}','MenuItemController@is_front');


	/*Routes for Article*/
	Route::get('/admin/view-article','ArticleController@index');
	Route::get('/admin/new-article','ArticleController@create');
	Route::post('/admin/store-article','ArticleController@store');
	Route::get('/findArticleName','ArticleController@findArticleName');
	Route::get('/admin/delete-article/{id}','ArticleController@destroy');
	Route::get('/admin/publish-article/{id}','ArticleController@publish');
	Route::get('/admin/edit-article/{id}','ArticleController@edit');
	Route::post('/admin/update-article/{id}','ArticleController@update');
 
});
/*Routes for logout user*/
Route::get('/logout','AdminController@logout');
