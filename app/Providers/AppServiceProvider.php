<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ProjectRepositoryInterface;
use App\Repositories\ProjectRepository;
use App\Repositories\TaskRepositoryInterface;
use App\Repositories\TaskRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
