<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Inertia\Response;

class ProjectController extends Controller
{
    public function index(): Response
    {
        $projects = Project::latest('id')->paginate(10);

        return inertia('Projects/Index', [
            'projects' => ProjectResource::collection($projects),
        ]);
    }

    public function show(Project $project): Response
    {
        return inertia('Projects/Show', [
            'project' => $project,
        ]);
    }
}
