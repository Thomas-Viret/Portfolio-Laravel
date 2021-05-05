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


// ------------  ACCUEIL   ------------ //

Route::get('/',

[
    // "Target"
    'uses' => 'MainController@home',
    // Route name
    'as'   => 'main-home'
]
);

// ------------  PRESENTATION   ------------ //
Route::get('/présentation','MainController@presentation')->name('main-presentation');


// ------------  FORMATION   ------------ //
Route::get('/formation','MainController@formation')->name('main-formation');

// ------------  COMPETENCES   ------------ //
Route::get('/skills','MainController@skills')->name('main-skills');

// ------------  PROJETS   ------------ //
Route::get('/projects','MainController@projects')->name('main-projects');

// ------------  CONTACT   ------------ //
Route::get('/contact','MainController@contact')->name('main-contact');

// ------------  CREATION UTILISATEUR   ------------ //
Route::get('user/create','UserController@create')->name('user.create');
Route::post('user/store','UserController@store')->name('user.store');

// ------------  LISTE DES UTILISATEURS   ------------ //
Route::get('user','UserController@index')->name('user.index');

// ------------  MODIFIER UN UTILISATEUR   ------------ //
Route::get('/user/edit/{user}','UserController@edit')->name('user.edit');
Route::put('/user/edit/{user}','UserController@update')->name('user.update');

// ------------  MODIFIER LE MOT DE PASSE D'UN UTILISATEUR   ------------ //
Route::get('/user/password/{user}','UserController@password')->name('user.password');
Route::put('/user/password/{user}','UserController@password_store')->name('user.password_store');

// ------------  SUPPRIMER UN UTILISATEUR   ------------ //
Route::delete('/user/{user}','UserController@destroy')->name('user.destroy');
