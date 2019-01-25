<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------|
------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();

Route::get('admin/view','AccountController@admin')->middleware('revalidate');
Route::post('register','AccountController@store')->middleware('revalidate');
Route::get('account/view','AccountController@list')->middleware('revalidate');
Route::get('account/delete/{id}','AccountController@delete')->middleware('revalidate');

Route::get('service/create','ServiceController@index')->middleware('revalidate');
Route::post('service/create','ServiceController@store')->middleware('revalidate');
Route::get('service/edit/{id}','ServiceController@edit')->middleware('revalidate');
Route::get('service/update/{id}','ServiceController@update')->middleware('revalidate');
Route::get('service/delete/{id}','ServiceController@delete')->middleware('revalidate');


Route::get('login','AccountController@index');
Route::post('login','AccountController@login');
Route::get('logout','AccountController@logout');
 

Route::group(['middleware' => 'admin'], function()
{
Route::get('/','HomeViewController@index');
Route::post('select/customer','HomeViewController@customer_select');
// Route::get('select/customer/popup','HomeViewController@pagination');
 Route::post ( 'search/customer','HomeViewController@customer_search' );
 
 Route::get('order/create/{id}/{search_id}','OrderController@index');
 Route::post('order/submit','OrderController@store');
 Route::get('order/submit','OrderController@create');
 Route::get('order/edit/{id}','OrderController@edit');
 Route::get('order/update/{id}','OrderController@update');
 Route::get('order/detail/{id}','OrderController@detail');
  Route::get('order/delete/{id}','OrderController@delete');

 Route::get('customer/create','CustomerController@index');
 Route::post('customer/store','CustomerController@store');
 Route::get('customer/update','CustomerController@update');
 Route::get('customer/list','CustomerController@list');
 Route::get('customer/edit/{id}','CustomerController@edit');
 Route::get('customer/update/{id}','CustomerController@update');
 Route::get('customer/detail/{id}','CustomerController@detail');
 Route::get('customer/delete/{id}','CustomerController@delete');

 Route::get('dashboard','DashboardController@index');
 Route::get('dashboard/list/{id}','DashboardController@search');
 
 });
 




