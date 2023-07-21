<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', 'AdminSite\Course\NewController@index')->name('course.index');
Route::get('/create/{course?}', 'AdminSite\Course\NewController@create')->name('course.create');
Route::post('/store/{course?}', 'AdminSite\Course\NewController@store')->name('course.store');
Route::get('/delete/{course}', 'AdminSite\Course\NewController@delete')->name('course.delete');