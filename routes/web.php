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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => 'false']);

Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('project', 'ProjectController');
	Route::resource('terminal', 'TerminalController');
	Route::resource('todo', 'TodoController');
	Route::resource('profile', 'ProfileController');
	Route::resource('socialmedia', 'SocialmediaController');
});
