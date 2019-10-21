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
//Route::get('/',function (){
//    return view('welcome');
//});

Route::get('/', ['uses'=>'IndexController@index']);
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', ['uses'=>'AboutController@IndexPage','as'=>'contact']);
Route::match(['get','post'],'/contact', ['uses'=>'AboutController@ContactPage','as'=>'contact']);
//Route::get('/cat', 'CategoryController@show');
Route::get('/cat/{id}', 'CategoryController@CatById');
Route::get('/userposts/{id}', 'PostController@userposts');
Route::get('/post/{id}', 'PostController@singlePost');
Route::get('/posts', 'PostController@AllPosts');
//Route::get('/', 'CategoryController@topMenuCat');
