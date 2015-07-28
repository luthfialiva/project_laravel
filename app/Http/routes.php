<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('/about', 'PagesController@about');

Route::get('/activities', 'AdminController@act');

Route::get('/history', 'ReminderController@history');

Route::resource('reminder', 'ReminderController');

Route::resource('kategori', 'KategoriController');

Route::resource('bidang', 'BidangController');

Route::resource('renew', 'RenewController', ['only' => ['show', 'update']]);

Route::resource('remind', 'RemindController', ['only' => ['show', 'update']]);

Route::resource('profile', 'ProfileController', ['only' => ['show', 'update']]);

Route::resource('kepbag', 'KepbagController', ['only' => ['index']]);

Route::resource('peg', 'PegController', ['only' => ['index']]);


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

resource('admin', 'AdminController');

get('all-users', [
    'as' => 'admin.all',
    'uses' => 'AdminController@all'
]);

