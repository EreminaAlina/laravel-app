<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::all();
        return response()->json($todos);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'text' => 'required|string',
        ]);

        $todo = Todo::create($validatedData);

        return response()->json($todo, 201);
    }

    public function show(Todo $id)
    {
        return response()->json(Todo::where('id', $id));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'text' => 'required|string',
        ]);

        $todo = Todo::where('id', $id)->update($validatedData);

        return response()->json($todo, 200);
    }

    public function remove(Todo $id)
    {
        Todo::where('id', $id)->delete();

        return response()->json(null, 204);
    }
}
