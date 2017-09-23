<?php


Route::get('/', 'PostsController@home')->name('home');

Route::get('/blog', 'PostsController@blog')->name('blog');
