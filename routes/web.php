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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'Post@items')->name('home');

Route::get('/harvest', 'Harvester@exec');
Route::get('/harvest-api', 'Harvester@api');

Route::get('/posts', 'Post@items');
Route::post('/post', 'Post@store');
Route::delete('/task/{task}', 'Post@destroy');
