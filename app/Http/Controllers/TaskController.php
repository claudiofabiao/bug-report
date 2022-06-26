<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\Pagination\CursorPaginator;

class TaskController extends Controller
{
    public function index(): CursorPaginator
    {
        $tasks = Task::query();

        return $tasks->cursorPaginate(25);
    }
}
