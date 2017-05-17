<?php

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/registration/create', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@Create');

Route::post('/login', 'SessionController@Store');
Route::get('/logout', 'SessionController@Destroy');

