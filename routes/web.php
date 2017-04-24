<?php

use App\Task;

Route::get('/', function () {

    $tasks = Task::all();

    return view('welcome', compact('tasks'));
});

Route::get('/tasks/{id}', function ($id) {


    $tasks = Task::find($id);
    return view('tasks.show', compact('tasks'));


});

