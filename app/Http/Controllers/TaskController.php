<?php

namespace App\Http\Controllers;

use App\Models\Statistics;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::paginate(10);
        return view('tasks.index', compact('tasks'));
    }
    public function create()
    {
        $admins = User::where('is_admin', true)->get();
        $users = User::where('is_admin', false)->get();
        return view('tasks.create', compact('admins', 'users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'assigned_to_id' => 'required|exists:users,id',
            'assigned_by_id' => 'required|exists:users,id',
        ]);
        Task::create($request->all());

        // Update statistics
        $statistic = Statistics::firstOrNew(['user_id' => $validated['assigned_to_id']]);
        $statistic->task_count++;
        $statistic->save();

        return redirect()->route('tasks.index');
    }

    public function statistics()
    {
        $statistics = Statistics::with('user')->orderBy('task_count', 'desc')->take(10)->get();
        return view('tasks.statistics', compact('statistics'));
    }
}
