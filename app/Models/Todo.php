<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['text'];

    public static function createTask($task)
    {
        return self::create($task);
    }

    public static function updateTask($task, $id)
    {
        return self::where('id', $id)->update($task);
    }

    public static function deleteTask($id)
    {
        return self::where('id', $id)->delete();
    }
}
