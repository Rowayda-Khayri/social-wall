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


//****** Posts ******//

Route::get('/wall', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post/store', 'PostController@store');
Route::get('/post/{id}/like1', 'PostController@like1');
Route::get('/post/{id}/like2', 'PostController@like2');
Route::get('/post/{id}/share', 'PostController@share');
Route::post('/post/{id}/comment', 'PostController@comment');