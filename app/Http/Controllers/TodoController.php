<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\JsonResponse;

class TodoController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Todo::all());
    }

    public function store(TodoRequest $request): JsonResponse
    {
        $todo = Todo::createTask($request);
        return response()->json($todo, 201);
    }

    public function show(Todo $id): JsonResponse
    {
        return response()->json(Todo::where('id', $id));
    }

    public function update(TodoRequest $request, $id): JsonResponse
    {
        return response()->json(Todo::updateTask($request, $id));
    }

    public function remove(Todo $id): JsonResponse
    {
        Todo::deleteTask($id);
        return response()->json(null, 204);
    }
}
