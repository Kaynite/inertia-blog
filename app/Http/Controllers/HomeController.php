<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function home(): Response
    {
        $posts = Post::with('categories')->latest('id')->take(5)->get();

        return Inertia::render('Welcome', [
            'posts' => PostResource::collection($posts),
        ]);
    }
}
