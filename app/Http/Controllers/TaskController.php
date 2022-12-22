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
        $task = Task::all();
        $data = [
            "message" => "Get all task resource",
            "data" => $task
        ];

        return response()->json($data, 200);
        
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

        $data = [
            "Message" => "add new resouces succesfully",
            "data" => $task,
        ];

        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
          $task = Task::find($id);

        if ($task){
            $dataInput = [
                "task" => $request->task,
                "start_date" => $request->start_date,
                "deadline" => $request->deadline,
            ];

        $task->update($dataInput);

        $data = [
            "Message" => "Task is update",
            "data" => $task
        ];

        return response($data, 200);

        }else{
            $data = [
                "message" => "Task not found",
            ];

            return response()->json($data, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        
        if($task){
            $task->delete($id);

            $data = [
                "message" => "Task is deleted"
            ];

            return response()->json($data, 200);
        }else{
            $data = [
                "message" => "Task not found"
            ];
            
            return response()->json($data, 404);
        }
    }
}
