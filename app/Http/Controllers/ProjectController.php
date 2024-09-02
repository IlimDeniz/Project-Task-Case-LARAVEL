<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepositoryInterface;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private $projectRepository;

    public function __construct(ProjectRepositoryInterface $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function index()
    {
        $projects = $this->projectRepository->getAllProjects();
        return response()->json($projects);
    }

    public function show($id)
    {
        $project = $this->projectRepository->getProjectById($id);
        return response()->json($project);
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'description']);
        $project = $this->projectRepository->createProject($data);
        return response()->json($project, 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['name', 'description']);
        $project = $this->projectRepository->updateProject($id, $data);
        return response()->json($project);
    }

    public function destroy($id)
    {
        $this->projectRepository->deleteProject($id);
        return response()->json(null, 204);
    }
}
