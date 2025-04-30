<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Получить все задачи
    public function index()
    {
        return response()->json(Task::all(), 200);
    }

    // Создать задачу
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pending,in_progress,completed'
        ]);

        $task = Task::create($validated);

        return response()->json($task, 201);
    }

    // Получить одну задачу
    public function show(Task $task)
    {
        return response()->json($task, 200);
    }

    // Обновить задачу
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pending,in_progress,completed'
        ]);

        $task->update($validated);

        return response()->json($task, 200);
    }

    // Удалить задачу
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json(['message' => 'Task deleted'], 200);
    }
}
