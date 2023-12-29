<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TaskController extends Controller
{
    /**
     * Returns the view for the index page.
     * This page contains all the tasks.
     *
     * @return View The view for the index page.
     */
    public function index(): View
    {
        return view('tasks.index', [
            'tasks' => Task::get()
        ]);
    }

    /**
     * Show the task with the given ID.
     *
     * @param string $id The ID of the task to show.
     * @return View The view for displaying the task.
     * @throws NotFoundHttpException When the requested ID does not exist.
     */
    public function show(Task $task): View
    {
        return view('tasks.show', [
            'task' => $task
        ]);
    }
}
