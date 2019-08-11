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
Route::get('cron-delete', 'Meme\Cron@delete');
Route::post('dislike', 'Meme\Meme@dislike')->middleware('auth');
Route::post('like', 'Meme\Meme@like')->middleware('auth');
Route::resource('meme', 'Meme\Meme')->middleware('auth');
Route::resource('src', 'Meme\Src')->middleware('auth');
