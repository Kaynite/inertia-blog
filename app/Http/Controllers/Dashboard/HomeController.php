<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function dashboard(): Response
    {
        $posts = Post::latest('id')->paginate(10);

        return Inertia::render('Dashboard', [
            'posts' => PostResource::collection($posts),
        ]);
    }
}
