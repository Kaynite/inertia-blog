<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Inertia\Response;

class PostController extends Controller
{
    public function index(): Response
    {
        $posts = Post::with('categories')->latest('id')->paginate(10);

        return inertia('Posts/Index', [
            'posts' => PostResource::collection($posts),
        ]);
    }

    public function show(Post $post): Response
    {
        return inertia('Posts/Show', [
            'post' => $post->load('categories')->toResource(),
        ]);
    }
}
