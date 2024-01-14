<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
     * @param Task $task The Task to show.
     * @return View The view for displaying the task.
     * @throws NotFoundHttpException When the requested ID does not exist.
     */
    public function show(Task $task): View
    {
        return view('tasks.show', [
            'task' => $task
        ]);
    }

    /**
     * Returns the view for the new task page.
     * This page contains a form to create a new task.
     *
     * @return View The view for the new task page.
     */
    public function create(): View
    {
        return view('tasks.create');
    }

    /**
     * Creates a new task.
     * The provided data is validated and the task is created.
     * If the task is created successfully, the user is redirected to the new task.
     * If the task is not created successfully, the user is redirected back with the errors.
     *
     * @param Request $request The request containing the task data.
     * @return RedirectResponse The response to redirect to the new task.
     */
    public function store(Request $request): RedirectResponse
    {
        $task = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'priority' => 'required|integer|min:1|max:4',
            'time_estimated' => 'required|integer'
        ]);

        $task = Task::create($task);

        return redirect()
            ->route('tasks.show', $task)
            ->with('success', 'Task created successfully!');
    }
}
