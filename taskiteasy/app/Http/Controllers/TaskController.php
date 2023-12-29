<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class TaskController extends Controller
{
    private array $data = [
        [
            "id" => 1,
            "title" => "Write a love letter to Laravel",
            "description" => "Compose a heartfelt love letter to Laravel, explaining how it has revolutionized your coding",
            "priority" => 1,
            "state" => "new",
            "time_estimated" => 15,
            "time_spent" => 0,
            "created_at" => "2023-10-15 09:00:00",
            "updated_at" => "2023-10-15 09:30:00",
            "completed_at" => null
        ],
        [
            "id" => 2,
            "title" => "Take out the trash",
            "description" => "It's starting to stink in the kitchen, throw out that trash",
            "priority" => 1,
            "state" => "complete",
            "time_estimated" => 3,
            "time_spent" => 2,
            "created_at" => "2023-10-15 09:00:00",
            "updated_at" => "2023-10-15 09:30:00",
            "completed_at" => "2023-10-15 10:00:00"
        ],
        [
            "id" => 3,
            "title" => "Finish the Laravel Assignment",
            "description" => "You need to spend time on this exercises, for the students sake",
            "priority" => 4,
            "state" => "started",
            "time_estimated" => 150,
            "time_spent" => 160,
            "created_at" => "2023-10-15 09:00:00",
            "updated_at" => "2023-10-15 09:30:00",
            "completed_at" => null
        ]
    ];

    /**
     * Returns the view for the index page.
     * This page contains all the tasks.
     *
     * @return View The view for the index page.
     */
    public function index(): View {
        return view('tasks.index', [
            'tasks' => $this->data
        ]);
    }

    /**
     * Show the task with the given ID.
     *
     * @param string $id The ID of the task to show.
     * @return View The view for displaying the task.
     */
    public function show(string $id): View {
        return view('tasks.show', [
            'task' => $this->findTask($id)
        ]);
    }

    /**
     * Find a task by its ID.
     *
     * @param mixed $id The ID of the task to find.
     * @return array|null The found task as an associative array if found, otherwise null.
     */
    private function findTask($id): array|null {
        $key = array_search($id, array_column($this->data, 'id'));
        return $key !== false ? $this->data[$key] : null;
    }
}
