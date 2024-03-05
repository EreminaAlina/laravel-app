<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('todos')->group(function(){
    Route::get('/', [TodoController::class, 'index']);
    Route::post('/', [TodoController::class, 'store']);
    Route::get('/{todo:uuid}', [TodoController::class, 'show']);
    Route::put('/{todo:uuid}', [TodoController::class, 'update']);
    Route::delete('/{todo:uuid}', [TodoController::class, 'remove']);
});


//Route::post('/users', [UserController::class, 'createUser']);
