<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tasks/{id}', function ($id) {
    $task = findTask($id);

    if (!$task) {
        abort(404);
    }

    return view('tasks.show', [
        'task' => findTask($id)
    ]);
});

function findTask($id): array|null {
    $data = [
        [
            "id" => 1,
            "title" => "Write a love letter to Laravel",
            "description" => "Compose a heartfelt love letter to Laravel, explaining how it has revolutionized your coding",
            "priority" => 3,
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
            "state" => "new",
            "time_estimated" => 2,
            "time_spent" => 0,
            "created_at" => "2023-10-15 09:00:00",
            "updated_at" => "2023-10-15 09:30:00",
            "completed_at" => null
        ],
        [
            "id" => 3,
            "title" => "Finish the Laravel Assignment",
            "description" => "You need to spend time on this exercises, for the students sake",
            "priority" => 3,
            "state" => "new",
            "time_estimated" => 150,
            "time_spent" => 0,
            "created_at" => "2023-10-15 09:00:00",
            "updated_at" => "2023-10-15 09:30:00",
            "completed_at" => null
        ]
    ];

    $filtered = array_filter($data, function ($child) use ($id) {
        return $child['id'] == $id;
    });

    return count($filtered) > 0 ? reset($filtered) : null;
}
