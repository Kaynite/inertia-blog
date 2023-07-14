<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Inertia\Response;

class PostController extends Controller
{
    public function create(): Response
    {
        $categories = Category::all();

        return inertia('Dashboard/Posts/Create', [
            'categories' => $categories,
        ]);
    }

    public function store(PostRequest $request): RedirectResponse
    {
        $post = Post::create($request->validated());

        $post->categories()->attach($request->categories);

        return to_route('dashboard.home');
    }

    public function edit(Post $post): Response
    {
        return inertia('Dashboard/Posts/Edit', [
            'post' => $post->load('categories'),
            'categories' => Category::all(),
        ]);
    }

    public function update(PostRequest $request, Post $post): RedirectResponse
    {
        $post->update($request->all());

        return to_route('dashboard.home');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return to_route('dashboard.home');
    }
}
