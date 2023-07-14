<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', 'AdminSite\Course\NewController@index')->name('course.index');