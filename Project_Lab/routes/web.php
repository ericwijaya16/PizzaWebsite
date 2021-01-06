<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@home');
Route::get('/login','MainController@login');
Route::get('/register','MainController@register');
Route::get('/store','MainController@store');
Route::get('/logs','MainController@logs');
Route::get('/search','MainController@search');
Route::get('/searchguest','MainController@searchguest');
Route::get('/huser','MainController@huser');
Route::get('/detailmember/{id}','MainController@detailmember');
Route::get('/hadmin','MainController@hadmin');
Route::get('/detailguest/{id}','MainController@detailguest');
Route::get('/cart','MainController@cart');
Route::get('/transactionhistory','MainController@transactionhistory');
Route::get('/transactiondetail','MainController@transactiondetail');
Route::get('/allUser', 'UserController@viewUser');
Route::get('/transactions', 'TransactionController@viewTrans');
Route::get('/addPizza', 'PizzaController@add');
Route::post('/storePizza', 'PizzaController@store');
Route::get('/deletePizza/{id}', 'PizzaController@deletePizza');
Route::get('/deletePizza/delete/{id}', 'PizzaController@delete');
Route::get('/editPizza/{id}', 'PizzaController@editPizza');
Route::put('/editPizza/update/{id}', 'PizzaController@update');
//Route::get('/detail/trans/{id}', 'TransactionController@detail');
Route::get('/detail/trans', 'TransactionController@detail');
//Route::get('/', function () {return view('allUser');});
//Route::get('/', function () {return view('allTransaction');});