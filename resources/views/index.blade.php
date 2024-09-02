<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>İLİM DENİZ TOPRAK - PROJECT</title>
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/editors/quill/quill.snow.css">
    <link href="assets/css/apps/todolist.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
        .layout-px-spacing {
            min-height: calc(100vh - 166px) !important;
        }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-text">
                    <a href="/" class="nav-link"> İLİM DENİZ TOPRAK - PROJECT </a>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('layouts.nav')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12">

                        <div class="mail-box-container">
                            <div class="mail-overlay"></div>

                            <div class="tab-title">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-clipboard">
                                            <path
                                                d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                            </path>
                                            <rect x="8" y="2" width="8" height="4" rx="1"
                                                ry="1"></rect>
                                        </svg>
                                        <h5 class="app-title">Projects</h5>
                                    </div>

                                    <div class="todoList-sidebar-scroll">
                                        <div class="col-md-12 col-sm-12 col-12 mt-4 pl-0">
                                            <ul class="nav nav-pills d-block" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions active" id="all-list"
                                                        data-toggle="pill" href="#pills-inbox" role="tab"
                                                        aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-list">
                                                            <line x1="8" y1="6" x2="21"
                                                                y2="6"></line>
                                                            <line x1="8" y1="12" x2="21"
                                                                y2="12"></line>
                                                            <line x1="8" y1="18" x2="21"
                                                                y2="18"></line>
                                                            <line x1="3" y1="6" x2="3"
                                                                y2="6"></line>
                                                            <line x1="3" y1="12" x2="3"
                                                                y2="12"></line>
                                                            <line x1="3" y1="18" x2="3"
                                                                y2="18"></line>
                                                        </svg> All Projects</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <a class="btn" id="addTask" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg> New Project</a>
                                </div>
                            </div>

                            <div id="todo-inbox" class="accordion todo-inbox">
                                <div class="search">
                                    <input type="text" class="form-control input-search"
                                        placeholder="Search Here...">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-menu mail-menu d-lg-none">
                                        <line x1="3" y1="12" x2="21" y2="12"></line>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <line x1="3" y1="18" x2="21" y2="18"></line>
                                    </svg>
                                </div>

                                <div class="todo-box">

                                    <div id="ct" class="todo-box-scroll">
                                        @foreach ($projects as $project)
                                            <div class="todo-item all-list">
                                                <div class="todo-item-inner">

                                                    <div class="todo-content">
                                                        <h5 class="todo-heading"
                                                            data-todoHeading="{{ $project->name }}">
                                                            {{ $project->name }}</h5>
                                                        <p class="meta-date">{{ $project->created_at }}</p>
                                                        <p class="todo-text"
                                                            data-todoHtml="<p>{{ $project->description }}</p>"
                                                            data-todoText='{"ops":[{"insert":"{{ $project->description }}"}]}'>
                                                            {{ $project->description }}</p>
                                                    </div>

                                                    <div class="action-dropdown custom-dropdown-icon">
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle" href="#" role="button"
                                                                id="dropdownMenuLink-2" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="true">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink-2">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('project.detail', $project->id) }}">Detail</a>
                                                                <a class="dropdown-item btn-edit" href="#"
                                                                    data-id="{{ $project->id }}">Edit</a>
                                                                <a class="dropdown-item delete-project" href="#"
                                                                    data-id="{{ $project->id }}">Delete</a>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="modal fade" id="todoShowListItem" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-x close"
                                                        data-dismiss="modal">
                                                        <line x1="18" y1="6" x2="6"
                                                            y2="18"></line>
                                                        <line x1="6" y1="6" x2="18"
                                                            y2="18"></line>
                                                    </svg>
                                                    <div class="compose-box">
                                                        <div class="compose-content">
                                                            <h5 class="task-heading"></h5>
                                                            <p class="task-text"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"> Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal for Editing Project -->
                                    <div class="modal fade" id="todoEditModal" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-x close"
                                                        data-dismiss="modal">
                                                        <line x1="18" y1="6" x2="6"
                                                            y2="18"></line>
                                                        <line x1="6" y1="6" x2="18"
                                                            y2="18"></line>
                                                    </svg>
                                                    <div class="compose-box">
                                                        <div class="compose-content">
                                                            <form id="editProjectForm">
                                                                <input type="hidden" id="edit_project_id"
                                                                    name="project_id">
                                                                <div class="form-group">
                                                                    <label for="edit_name">Name</label>
                                                                    <input type="text" id="edit_name"
                                                                        class="form-control" name="name" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="edit_description">Description</label>
                                                                    <textarea id="edit_description" class="form-control" name="description" rows="3" required></textarea>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog"
                            aria-labelledby="addTaskModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-x close" data-dismiss="modal">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg>
                                        <div class="compose-box">
                                            <div class="compose-content" id="addTaskModalTitle">
                                                <h5 class="">Add Project</h5>
                                                <form id="create-project-form">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="d-flex mail-to mb-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-edit-3 flaticon-notes">
                                                                    <path d="M12 20h9"></path>
                                                                    <path
                                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                                    </path>
                                                                </svg>
                                                                <div class="w-100">
                                                                    <input id="name" type="text"
                                                                        placeholder="Name" class="form-control"
                                                                        name="name" required>
                                                                    <span class="validation-text"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mail-subject mb-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-file-text flaticon-menu-list">
                                                            <path
                                                                d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                            </path>
                                                            <polyline points="14 2 14 8 20 8"></polyline>
                                                            <line x1="16" y1="13" x2="8"
                                                                y2="13"></line>
                                                            <line x1="16" y1="17" x2="8"
                                                                y2="17"></line>
                                                            <polyline points="10 9 9 9 8 9"></polyline>
                                                        </svg>
                                                        <div class="w-100">
                                                            <textarea style="width: 100%" class="form-control" name="description" id="description" cols="30"
                                                                placeholder="Description" required></textarea>
                                                        </div>
                                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Add Project</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            @include('layouts.footer')
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/ie11fix/fn.fix-padStart.js"></script>
    <script src="plugins/editors/quill/quill.js"></script>
    <script src="assets/js/apps/todoList.js"></script>
    <script>
        $(document).ready(function() {
            $('#create-project-form').on('submit', function(event) {
                event.preventDefault();
                var formData = {
                    name: $('#name').val(),
                    description: $('#description').val(),
                };

                $.ajax({
                    url: '/projects',
                    method: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content')
                    },
                    success: function(response) {
                        alert('Project created successfully!');
                        $('#create-project-form')[0].reset();
                    },
                    error: function(xhr) {
                        alert('Error creating project: ' + xhr.responseText);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.delete-project').on('click', function(event) {
                event.preventDefault();

                if (!confirm('Are you sure you want to delete this project?')) {
                    return;
                }

                var projectId = $(this).data('id');

                $.ajax({
                    url: '/projects/' + projectId,
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content')
                    },
                    success: function(response) {
                        alert('Project deleted successfully!');
                        location.reload();
                    },
                    error: function(xhr) {
                        alert('Error deleting project: ' + xhr.responseText);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {

            $(document).on('click', '.btn-edit', function(e) {
                e.preventDefault();

                var projectId = $(this).data('id');

                $.ajax({
                    url: '/projects/' + projectId,
                    method: 'GET',
                    success: function(response) {
                        $('#edit_project_id').val(response.id);
                        $('#edit_name').val(response.name);
                        $('#edit_description').val(response.description);

                        $('#todoEditModal').modal('show');
                    },
                    error: function(xhr) {
                        alert('Error: ' + xhr.responseText);
                    }
                });
            });
            $('#editProjectForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: '/projects/' + $('#edit_project_id')
                        .val(),
                    method: 'PUT',
                    data: $(this).serialize(),
                    success: function(response) {

                        $('#todoEditModal').modal('hide');

                        // Show success message
                        alert('Project updated successfully!');
                        location.reload();
                    },
                    error: function(xhr) {
                        alert('Error: ' + xhr.responseText);
                    }
                });
            });

        });
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/starter_kit_blank_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Mar 2021 13:47:28 GMT -->

</html>
