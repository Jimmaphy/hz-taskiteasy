<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostController extends Controller
{
    /**
     * Returns the view for the index page.
     * This page contains all the tasks.
     *
     * @return View The view for the index page.
     */
    public function index(): View
    {
        return view('posts.index', [
            'posts' => Post::get()
        ]);
    }

    /**
     * Show the task with the given ID.
     *
     * @param Post $post The post to show.
     * @return View The view for displaying the task.
     * @throws NotFoundHttpException When the requested ID does not exist.
     */
    public function show(Post $post): View
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
