İLİM DENİZ TOPRAK - PROJECT

NOTE: I was very ill over the past week, and unfortunately, I had to spend all my time dealing with my illness. As a result, I wasn't able to dedicate any time to the projects I was working on. Most of my time was spent battling the illness, so I was unable to complete the update section for the task area. Due to the limited time I had, I also could not spend much time on the documentation. I apologize for this inconvenience. Wishing you all the best in your work.

Getting Started Guide
1. Clone the Project

To clone the project to your local machine, use the following command:

git clone https://github.com/IlimDeniz/project.git
2. Install Dependencies

Navigate to the project directory and install the required PHP dependencies using Composer:

composer install
3. Set Up the Database

Configure your database settings in the .env file. After updating the file with your MySQL credentials, run the migration command to set up the database schema:

php artisan migrate

Alternatively, you can use the provided SQL script to set up the database. The SQL file is available in the repository.
Project Overview

This project uses the CORK template, which includes HTML, CSS, Bootstrap, and jQuery for the front end. The backend is built using the PHP/Laravel framework. The Repository pattern is employed as a design pattern in this project.
Repository Pattern Usage
Overview

The Repository Pattern separates data access code from business logic, making your application's code cleaner, more maintainable, and testable. This pattern provides an interface for accessing data sources and manages data access operations independently from other parts of your application.
Project Structure

    app/Repositories: Contains repository classes that manage data access operations.
    app/Models: Contains the models.

Repositories Used
ProjectRepository

The ProjectRepository class manages data access operations for the Project model. It provides the following functionalities:

    getAllProjects(): Retrieves all projects.
    getProjectById($id): Finds a project by its ID.
    createProject(array $data): Creates a new project.
    updateProject($id, array $data): Updates a project by its ID.
    deleteProject($id): Deletes a project by its ID.

TaskRepository

The TaskRepository class manages data access operations for the Task model. It provides the following functionalities:

    getAllTasks(): Retrieves all tasks.
    getTaskById($id): Finds a task by its ID.
    createTask(array $data): Creates a new task.
    updateTask($id, array $data): Updates a task by its ID.
    deleteTask($id): Deletes a task by its ID.

Usage Example

To perform operations on projects and tasks, you can use the respective repositories. For instance, to create a project, you can use the ProjectRepository class within the ProjectController to manage data access operations.

This structure separates data access code from business logic, making your application code more readable and manageable.

Route List

GET|HEAD        projectDetail/{id} ................................................................ project.detail › DashboardController@projectDetail
  GET|HEAD        projects .................................................................................... projects.index › ProjectController@index
  POST            projects .................................................................................... projects.store › ProjectController@store
  GET|HEAD        projects/create ........................................................................... projects.create › ProjectController@create
  GET|HEAD        projects/{project} ............................................................................ projects.show › ProjectController@show
  PUT|PATCH       projects/{project} ........................................................................ projects.update › ProjectController@update
  DELETE          projects/{project} ...................................................................... projects.destroy › ProjectController@destroy
  GET|HEAD        projects/{project}/edit ....................................................................... projects.edit › ProjectController@edit


  GET|HEAD        tasks ............................................................................................. tasks.index › TaskController@index
  POST            tasks ............................................................................................. tasks.store › TaskController@store
  GET|HEAD        tasks/create .................................................................................... tasks.create › TaskController@create
  GET|HEAD        tasks/{task} ........................................................................................ tasks.show › TaskController@show
  PUT|PATCH       tasks/{task} .................................................................................... tasks.update › TaskController@update
  DELETE          tasks/{task} .................................................................................. tasks.destroy › TaskController@destroy
  GET|HEAD        tasks/{task}/edit ................................................................................... tasks.edit › TaskController@edit
