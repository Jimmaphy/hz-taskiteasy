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

    /**
     * Returns the view for the edit task page.
     *
     * @param Task $task The task to edit.
     * @return View The view for the edit task page.
     */
    public function edit(Task $task): View
    {
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    /**
     * Updates the task with the given ID.
     *
     * @param Request $request The request containing the task data.
     * @param Task $task The task to update.
     * @return RedirectResponse The response to redirect to the updated task.
     */
    public function update(Request $request, Task $task): RedirectResponse
    {
        $validated_task = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'priority' => 'required|integer|min:1|max:4',
            'time_estimated' => 'required|integer|min:0',
            'time_spent' => 'required|integer|min:0',
            'state' => 'required|In:new,ongoing,complete'
        ]);

        if ($validated_task['state'] === 'complete' && $task['state'] !== 'complete') {
            $validated_task['completed_at'] = now();
        } else if ($validated_task['state'] === 'complete' && $task['state'] === 'complete') {
            $validated_task['completed_at'] = $task['completed_at'];
        } else if ($validated_task['state'] !== 'complete') {
            $validated_task['completed_at'] = null;
        }

        $task->update([
            'title' => $validated_task['title'],
            'description' => $validated_task['description'],
            'priority' => $validated_task['priority'],
            'time_estimated' => $validated_task['time_estimated'],
            'time_spent' => $validated_task['time_spent'],
            'state' => $validated_task['state'],
            'completed_at' => $validated_task['completed_at']
        ]);

        return redirect()
            ->route('tasks.show', $task)
            ->with('success', 'Task updated successfully!');
    }

    /**
     * Deletes the task with the given ID.
     *
     * @param Task $task The task to delete.
     * @return RedirectResponse The response to redirect to the index page.
     */
    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task deleted successfully!');
    }
}
