<?php
use Illuminate\Support\Facades\Route;

Route::get('/index', 'AdminSite\Department\NewController@index')->name('department.index');
Route::get('/create/{department?}', 'AdminSite\Department\NewController@create')->name('department.create');
Route::post('/store/{department?}', 'AdminSite\Department\NewController@store')->name('department.store');
Route::get('/get/{department}', 'AdminSite\Department\NewController@delete')->name('department.delete');