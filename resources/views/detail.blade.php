<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>İLİM DENİZ TOPRAK - PROJECT</title>
    <link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/js/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/editors/quill/quill.snow.css') }}">

    <link href="{{ asset('assets/css/apps/notes.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}" rel="stylesheet" type="text/css" />
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

                <div class="row app-notes layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="app-hamburger-container">
                            <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-menu chat-menu d-xl-none">
                                    <line x1="3" y1="12" x2="21" y2="12"></line>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <line x1="3" y1="18" x2="21" y2="18"></line>
                                </svg></div>
                        </div>

                        <div class="app-container">

                            <div class="app-note-container">

                                <div class="app-note-overlay"></div>

                                <div class="tab-title">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12 text-center">
                                            <a class="btn" id="addTask" href="#" data-toggle="modal"
                                                data-target="#addTaskModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-plus">
                                                    <line x1="12" y1="5" x2="12"
                                                        y2="19"></line>
                                                    <line x1="5" y1="12" x2="19"
                                                        y2="12"></line>
                                                </svg>
                                                Add New Task
                                            </a>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-12 mt-5">
                                            <ul class="nav nav-pills d-block" id="pills-tab3" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions active" id="all-notes"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-edit">
                                                            <path
                                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                            </path>
                                                            <path
                                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                            </path>
                                                        </svg> All Notes</a>
                                                </li>
                                            </ul>

                                            <hr />
                                            <ul class="nav nav-pills d-block group-list" id="pills-tab"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions g-dot-primary"
                                                        id="note-personal">Todo</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions g-dot-warning"
                                                        id="note-work">In-Progress</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link list-actions g-dot-success"
                                                        id="note-social">Done</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div id="ct" class="note-container note-grid">

                                    @foreach ($tasks as $task)
                                        <div
                                            class="note-item all-notes
        @if ($task->status == 'todo') note-personal
        @elseif($task->status == 'in-progress')
            note-work
        @elseif($task->status == 'done')
            note-social
        @else
            note-personal @endif">

                                            <div class="note-inner-content">
                                                <div class="note-content">
                                                    <p class="note-title" data-noteTitle="{{ $task->name }}">
                                                        {{ $task->name }}</p>
                                                    <p class="meta-time">{{ $task->created_at }}</p>
                                                    <div class="note-description-content">
                                                        <p class="note-description"
                                                            data-noteDescription="{{ $task->description }}">
                                                            {{ $task->description }}</p>
                                                    </div>
                                                </div>
                                                <a class="btn btn-danger dropdown-item delete-task" href="#"
                                                    data-id="{{ $task->id }}">Delete</a>


                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog"
                            aria-labelledby="addTaskModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <form id="create-task-form">
                                        <div class="modal-body">
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
                                                            <input id="name" type="text" placeholder="Name"
                                                                class="form-control" name="name" required>
                                                            <span class="validation-text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex mail-subject mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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

                                            <!-- New Selectbox for Status -->
                                            <div class="d-flex mail-status mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-list flaticon-menu-list">
                                                    <line x1="6" y1="9" x2="20"
                                                        y2="9"></line>
                                                    <line x1="6" y1="15" x2="20"
                                                        y2="15"></line>
                                                    <line x1="6" y1="21" x2="20"
                                                        y2="21"></line>
                                                </svg>
                                                <div class="w-100">
                                                    <select class="form-control" name="status" id="status"
                                                        required>
                                                        <option value="todo">Todo</option>
                                                        <option value="in-progress">In Progress</option>
                                                        <option value="done">Done</option>
                                                    </select>
                                                    <span class="validation-text"></span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Add Task</button>
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
    <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/ie11fix/fn.fix-padStart.js') }}"></script>
    <script src="{{ asset('assets/js/apps/notes.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.delete-task', function(event) {
                event.preventDefault();

                if (!confirm('Are you sure you want to delete this task?')) {
                    return;
                }

                var taskId = $(this).data('id');

                $.ajax({
                    url: '/tasks/' + taskId,
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content')
                    },
                    success: function(response) {
                        alert('Task deleted successfully!');
                        location.reload();
                    },
                    error: function(xhr) {
                        alert('Error deleting task: ' + xhr.responseText);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#create-task-form').on('submit', function(event) {
                event.preventDefault();

                var formData = {
                    name: $('#name').val(),
                    description: $('#description').val(),
                    status: $('#status').val(),
                    project_id: '{{ $project->id }}'
                };

                $.ajax({
                    url: '/tasks',
                    method: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        alert('Task created successfully!');
                        $('#addTaskModal').modal('hide');
                        $('#create-task-form')[0].reset();
                    },
                    error: function(xhr) {
                        alert('Error creating task: ' + xhr.responseText);
                    }
                });
            });


            $('#addTask').on('click', function(event) {
                event.preventDefault();
                $('#addTaskModal').modal('show');
            });
        });
    </script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/starter_kit_blank_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Mar 2021 13:47:28 GMT -->

</html>
