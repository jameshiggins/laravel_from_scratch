<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('welcome', compact('tasks'));
    }

    public function show($id)
    {
        $tasks = Task::find($id);

        return view('tasks.show', compact('tasks'));

    }
}
