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

Route::get('/', 'PagesController@index');

Route::get('/info', 'PagesController@info');

Route::get('/profile','PagesController@profile');

Route::get('/meetings','PagesController@meetings');

Route::get('/projects','PagesController@projects');

Route::get('/location-based','PagesController@locationTasks');

Route::get('/people-based','PagesController@peopleTasks');

Route::resource('tasks','TasksController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
