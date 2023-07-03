<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class CrudController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('welcome');
    }

    public function store(Request $request)
    {
        return response()->json([], 200);
    }
    
    public function show(Task $task)
    {
        return response()->json($task);
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return response()->json($task);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(null, 204);
    }
}
