<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Http\Resources\TodoResource;
use App\Models\Status;
use App\Models\Todo;
use App\Models\Type;
use Carbon\Carbon;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();

        $types = Type::all();

        $statuses = Status::all();

        return view('index',['todos' => $todos, 'types' => $types, 'statuses' => $statuses]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTodoRequest $request)
    {
        $data = $request->all();

        $todo = Todo::create([
            'title' => $data['title'],
            'status_id' => $data['status_id'],
            'type_id' => $data['type_id'],
            'description' => $data['description'],
            'date' => Carbon::now()->format('Y-m-d'),
        ]);

        return (new TodoResource($todo))->additional([
            'status' => 'ok',
            'code' => '201',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
