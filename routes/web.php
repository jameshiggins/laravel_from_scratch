<?php

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{tasks}', 'TasksController@show');
