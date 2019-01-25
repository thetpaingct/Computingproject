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

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('author/create','AuthorController@create');
Route::post('author/create','AuthorController@store');
Route::get('author','AuthorController@index');
Route::get('author/update/{id}','AuthorController@edit');
Route::post('author/update/{id}','AuthorController@update');

Route::get('author/delete/{id}','AuthorController@destroy');

Route::get('genre/create','GenreController@create');
Route::post('genre/create','GenreController@store');
Route::get('genre','GenreController@index');
Route::get('genre/update/{id}','GenreController@edit');
Route::post('genre/update/{id}','GenreController@update');

Route::get('publishinghouse/create','PublishinghouseController@create');
Route::post('publishinghouse/create','PublishinghouseController@store');
Route::get('publishinghouse','PublishinghouseController@index');
Route::get('publishinghouse/update/{id}','PublishinghouseController@edit');
Route::post('publishinghouse/update/{id}','PublishinghouseController@update');

Route::get('book/create','BookController@create');
Route::post('book/create','BookController@store');
Route::get('book','BookController@index');
Route::get('book/update/{id}','BookController@edit');
Route::post('book/update/{id}','BookController@update');

Route::get('register','AccountController@create');
Route::post('register','AccountController@store');

Route::get('login','AccountController@index');
Route::post('login','AccountController@login');

Route::get('book/detail/{id}','BookController@detail');

Route::get('home','BookController@homeview');

Route::get('home/authorsearch/{name}/{id}','BookController@authorsearch');
Route::get('home/genresearch/{name}/{id}','BookController@genresearch');
Route::get('home/publishinghousesearch/{name}/{id}','BookController@publishinghousesearch');

// Route::get('register','BookController@index');
// Route::get('book/update/{id}','BookController@edit');
// Route::post('book/update/{id}','BookController@update');