<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string',
        ]);
        $user = User::create($validatedData);
        return response()->json($user, 201);
    }
}
