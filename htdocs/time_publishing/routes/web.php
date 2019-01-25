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

// Route::get('home', function () {
//     return view('welcome');
// });

// Route::get('create', function () {
//     return view('HomeView.index');
// });
Route::get('login','AccountController@index');
Route::post('login','AccountController@login');

Route::get('register','AccountController@register');
Route::post('register','AccountController@store');

Route::get('logout','AccountController@logout')->middleware('admin');
 Route::get('todolist','TodolistController@index')->middleware('admin');
 Route::post('todolist/create','TodolistController@store')->middleware('admin');
 Route::post('note/create','NotesController@store')->middleware('admin');
  Route::get('note','NotesController@index')->middleware('admin');
 Route::get('todolist/delete/{id}','TodolistController@delete')->middleware('admin');
  Route::get('todolist/edit/{id}','TodolistController@edit')->middleware('admin');
   Route::get('todolist/update/{id}','TodolistController@update')->middleware('admin');
  Route::get('note/delete/{id}','NotesController@delete')->middleware('admin');
   Route::get('note/edit/{id}','NotesController@edit')->middleware('admin');
   Route::get('note/update/{id}','NotesController@update')->middleware('admin');

