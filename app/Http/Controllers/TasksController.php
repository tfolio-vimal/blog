<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index() {
        $tasks = task::all();
        return view('tasks.index',compact('tasks'));
    }
    public function show(Task $task) { /* Task::find(wildcard); */
        //$task = task::find($id);
        return view('tasks.show',compact('task'));
    }
}
