<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\Status;
use App\Models\Todo;
use App\Models\Type;

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
        return response()->json($request,201);
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
