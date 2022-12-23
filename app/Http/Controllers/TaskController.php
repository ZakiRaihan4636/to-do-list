<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Task::all();
        return view('dashboard', ['task' => $result]);
    }


    public function create(){
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dataInput = $request->validate([
            'task' => 'required',
            'start_date' => 'required|date',
            'deadline' => 'required|date',
        ]) ;

        $task = Task::create($dataInput);
        
        if($task){
            return redirect('/dashboard');
        }
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
