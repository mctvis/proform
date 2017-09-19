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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PagesController@index'); //This the correct way of doing. Dont directly return views

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController'); //Note that this 'posts' has nothing to do with table name posts ie this name can be diiffrent





/*Route::get('/users/{id}', function ($id) {
	return 'This is user '.$id;
});
*/


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
