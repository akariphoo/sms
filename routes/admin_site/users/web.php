<?php 
use Illuminate\Support\Facades\Route;

Route::get('/index', 'AdminSite\User\NewController@index')->name('user.index');
Route::get('/create/{user?}', 'AdminSite\User\NewController@create')->name('user.create');
Route::post('/store/{user?}', 'AdminSite\User\NewController@store')->name('user.store');
Route::get('/delete/{user}', 'AdminSite\User\NewController@delete')->name('user.delete');
