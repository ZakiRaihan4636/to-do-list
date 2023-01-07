<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
        $count_task = auth()->user()->task()->count();

        return view('dashboard', compact('count_task'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = auth()->user()->task()->get();
        return view('task.index')->with(['tasks' => $tasks]);
    }

    public function show(Task $task)
    {
        return view('task.index', compact('task'));
    }


    public function create()
    {
        return view('task.task');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'matkul' => 'required',
            'task' => 'required',
            'start_date' => 'required|date',
            'deadline' => 'required|date',
            'deskripsi' => 'required',
        ]);

        Task::create([
            'user_id' => $request->user_id,
            'matkul' => $request->matkul,
            'task' => $request->task,
            'start_date' => $request->start_date,
            'deadline' => $request->deadline,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('tasks.index');
    }

    public function edit(Task $task)
    {
        return view('task.index', compact('task'));
    }
    public function update(Request $request, Task $task)
    {
        //validate form
        $this->validate($request, [
            'matkul' => 'required',
            'task' => 'required',
            'start_date' => 'required|date',
            'deadline' => 'required|date',
            'deskripsi' => 'required',
        ]);
        //update task

        $task->update([
            'user_id' => $request->user_id,
            'matkul' => $request->matkul,
            'task' => $request->task,
            'start_date' => $request->start_date,
            'deadline' => $request->deadline,
            'deskripsi' => $request->deskripsi
        ]);

        //redirect to index
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        //delete task
        $task->delete();

        //redirect to index
        return redirect()->route('tasks.index');
    }
}
