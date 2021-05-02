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

Route::get('/',

[
    // "Target"
    'uses' => 'MainController@home',
    // Route name
    'as'   => 'main-home'
]

    // function () {
    // return view('welcome');
    // }

);

Route::get('/formation', function () {
    return view('formation', ['name' => 'Thomas']);
});

Route::get('/skill','MainController@skill')->name('main-skill');


Route::get('user/create','UserController@create')->name('user.create');
Route::post('user/store','UserController@store')->name('user.store');
Route::get('user','UserController@index')->name('user.index');

#/routes/web.php
Route::get('/user/edit/{user}','UserController@edit')->name('user.edit');
Route::put('/user/edit/{user}','UserController@update')->name('user.update');

#/routes/web.php
Route::get('/user/password/{user}','UserController@password')->name('user.password');
Route::put('/user/password/{user}','UserController@password_store')->name('user.password_store');


Route::delete('/user/{user}','UserController@destroy')->name('user.destroy');
