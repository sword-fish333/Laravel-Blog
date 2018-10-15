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



/*
Route::get('/man', function () {
    // return view('welcome');
    return "<h1><u>Hello man</u></h1>";
 });


  Route::get('/worker/{id?}/{name?}',function($id=3,$name="Andrew"){
    return "The user ".$name." with the id ".$id;
 });
 */

Route::get('/', 'PagesController@index');

 Route::get('/about','PagesController@about');


Route::get('/services','PagesController@services');

Route::resource('/posts','PostsController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
