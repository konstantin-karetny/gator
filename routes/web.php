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

Auth::routes();
Route::get('/', 'Meme\Meme@indexFront');
Route::get('cron-add', 'Meme\Cron@add');
Route::resource('meme', 'Meme\Meme')->middleware('auth');
Route::resource('src', 'Meme\Src')->middleware('auth');





Route::get('harvester', 'Harvester@exec');
Route::get('harvester-api', 'Harvester@api');
Route::get('posts', 'Post@items');
Route::post('post', 'Post@store');
Route::get('post/delete/{ids}', 'Post@delete');
