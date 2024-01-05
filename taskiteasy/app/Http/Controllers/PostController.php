<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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

    /**
     * Returns the view for the new post page.
     * This page contains a form to create a new post.
     *
     * @return View The view for the new post page.
     */
    public function new(): View
    {
        return view('posts.create');
    }

    /**
     * Creates a new post.
     * The provided data is validated and the post is created.
     * If the post is created successfully, the user is redirected to the new post.
     * If the post is not created successfully, the user is redirected back with the errors.
     *
     * @param Request $request The request containing the post data.
     * @return RedirectResponse The response to redirect to the new post.
     */
    public function create(Request $request): RedirectResponse
    {
        $post = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required|max:255',
            'body' => 'required'
        ]);

        $post = Post::create($post);

        return redirect()
            ->route('posts.show', $post)
            ->with('success', 'Post created successfully!');
    }

    /**
     * Returns the view for the edit post page.
     * This page contains a form to edit the post.
     *
     * @param Post $post The post to edit.
     * @return View The view for the edit post page.
     */
    public function edit(Post $post): View
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Updates the post with the given ID.
     * The provided data is validated and the post is updated.
     * If the post is updated successfully, the user is redirected to the updated post.
     * If the post is not updated successfully, the user is redirected back with the errors.
     *
     * @param Request $request The request containing the post data.
     * @param Post $post The post to update.
     * @return RedirectResponse The response to redirect to the updated post.
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        $validated_post = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required|max:255',
            'body' => 'required'
        ]);

        $post->update($validated_post);

        return redirect()
            ->route('posts.show', $post)
            ->with('success', 'Post updated successfully!');
    }

    /**
     * Deletes the post with the given ID.
     * If the post is deleted successfully, the user is redirected to the index page.
     * If the post is not deleted successfully, the user is redirected back with the errors.
     *
     * @param Post $post The post to delete.
     * @return RedirectResponse The response to redirect to the index page.
     */
    public function delete(Post $post): RedirectResponse {
        $post->delete();

        return redirect()
            ->route('posts')
            ->with('success', 'Post deleted successfully!');
    }
}
