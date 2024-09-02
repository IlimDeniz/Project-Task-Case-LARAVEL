<?php

namespace App\Http\Controllers;

use App\Repositories\TaskRepositoryInterface;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function index()
    {
        $tasks = $this->taskRepository->getAllTasks();
        return response()->json($tasks);
    }

    public function show($id)
    {
        $task = $this->taskRepository->getTaskById($id);
        return response()->json($task);
    }

    public function store(Request $request)
    {
        $data = $request->only(['project_id', 'name', 'description', 'status']);
        $task = $this->taskRepository->createTask($data);
        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['project_id', 'name', 'description', 'status']);
        $task = $this->taskRepository->updateTask($id, $data);
        return response()->json($task);
    }

    public function destroy($id)
    {
        $this->taskRepository->deleteTask($id);
        return response()->json(null, 204);
    }
}
