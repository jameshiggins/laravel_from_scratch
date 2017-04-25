<?php

Route::get('/posts', 'PostsController@index');
Route::get('/posts/{task}', 'PostsController@show');
