<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/create', 'AdminController@create')->name('create');
Route::get('/delete/{id}', 'AdminController@delete')->name('delete');
Route::post('/create', 'AdminController@create_post')->name('create.post');