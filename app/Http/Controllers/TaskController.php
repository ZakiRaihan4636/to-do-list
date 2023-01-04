<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function dashboard(){
        return view('welcome');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        $users = User::all();
        return view('task.task', [
           'tasks' => $tasks,
           'users' => $users
        ]);
    }


    public function create(){
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

        $this->validete($request,[
            'task' => 'required',
            'start_date' => 'required|date',
            'deadline' => 'required|date',
            'deskripsi' => 'required',
        ]) ;

        Task::create([
            'user_id' => $request->user_id,
            'task' => $request->task,
            'start_date' => $request->start_date,
            'deadline' => $request->deadline,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('tasks.index');
    }

    public function edit($id){
        $result = Task::find($id);

        return view('edit', ['task' => $result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'task' => 'required',
            'start_date' => 'required|date',
            'deadline' => 'required|date',
            'deskripsi' => 'required',
        ]);

        $post = Post::Find($id);
        $post->task = $request->task;
        $post->start_date = $request->start_date;
        $post->deadline = $request->deadline;
        $post->update();
        return redirect('/dashboard');
    }

    public function destroy($id)
    {
        Task:destroy($id);

        return redirect('/dashboard');
    }

}
