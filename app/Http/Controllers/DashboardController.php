<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Repositories\ProjectRepositoryInterface;
use App\Models\Task;
use App\Repositories\TaskRepositoryInterface;


class DashboardController extends Controller
{
    private $projectRepository;
    private $taskRepository;

    public function __construct(ProjectRepositoryInterface $projectRepository, TaskRepositoryInterface $taskRepository)
    {
        $this->projectRepository = $projectRepository;
        $this->taskRepository = $taskRepository;
    }

    public function index()
    {
        $projects = $this->projectRepository->getAllProjects();
        return view('index', compact('projects'));
    }

    public function projectDetail($id)
    {
        $project = $this->projectRepository->getProjectById($id);
        $tasks = $this->taskRepository->getTasksByProjectId($id);
        return view('detail', compact('project', 'tasks'));
    }
}
