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

Route::get('/intro','AdminController@index')->name('intro');
Route::get('/','WelcomeController@index')->name('home');

Route::get('/creintro','AdminController@create')->name('create');

route::post('/save','AdminController@store')->name('save');
route::get('/edit/{id}','AdminController@edit')->name('adminch');
route::post('/upadte/{id}','AdminController@update')->name('update');
route::get('/delete/{id}','AdminController@destroy')->name('delete');
