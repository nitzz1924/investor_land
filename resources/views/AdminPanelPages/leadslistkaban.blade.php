{{----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------}}
@section('title', 'All Leads')
<x-app-layout>
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <h4 class="fw-semibold mb-8">@yield('title')- ({{$leadcount}})</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">@yield('title')</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-2 d-flex justify-content-end align-items-center gap-1">
                        <div class="" data-bs-toggle="tooltip" title="Switch to Kanban">
                            <a href="{{ route('admin.leadslistkaban') }}" class="btn btn-outline-dark">
                                <i class="ti ti-layout-kanban"></i>
                            </a>
                        </div>
                        <div class="" data-bs-toggle="tooltip" title="Switch to List">
                            <a href="{{ route('admin.leadslist') }}" class="btn btn-outline-dark">
                                <i class="ti ti-list"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="add-task-title modal-title" id="addTaskModalTitleLabel1">Add Task</h5>
                        <h5 class="edit-task-title modal-title" id="addTaskModalTitleLabel2">Edit Task</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="compose-box">
                            <div class="compose-content" id="addTaskModalTitle">
                                <div class="addTaskAccordion" id="add_task_accordion">
                                    <div class="task-content task-text-progress">
                                        <div id="collapseTwo" class="collapse show" data-parent="#add_task_accordion">
                                            <div class="task-content-body">
                                                <form action="javascript:void(0);">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="task-title mb-4 d-flex">
                                                                <input id="kanban-title" type="text" placeholder="Task" class="form-control" name="task">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="task-badge d-flex">
                                                                <textarea id="kanban-text" placeholder="Task Text" class="form-control" name="taskText"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start">
                        <div class="d-flex gap-6">
                            <button data-btn-action="addTask" class="btn add-tsk btn-primary">Add Task</button>
                            <button data-btn-action="editTask" class="btn edit-tsk btn-success">Save</button>
                            <button class="btn bg-danger-subtle text-danger d-flex align-items-center gap-1" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addListModal" tabindex="-1" role="dialog" aria-labelledby="addListModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title add-list-title" id="addListModalTitleLabel1">Add List</h5>
                        <h5 class="modal-title edit-list-title" id="addListModalTitleLabel2">Edit List</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="compose-box">
                            <div class="compose-content" id="addListModalTitle">
                                <form action="javascript:void(0);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="list-title d-flex align-items-center">
                                                <input id="item-name" type="text" placeholder="List Name" class="form-control" name="task">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start">
                        <div class="d-flex gap-6">
                            <button class="btn bg-danger-subtle text-danger d-flex align-items-center gap-1" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn add-list btn-primary">Add List</button>
                            <button class="btn edit-list btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteConformation" tabindex="-1" role="dialog" aria-labelledby="deleteConformationLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" id="deleteConformationLabel">
                    <div class="modal-header">
                        <div class="icon round-40 d-flex align-items-center justify-content-center bg-light-danger text-danger me-2 rounded-circle">
                            <i class="ti ti-trash fs-6"></i>
                        </div>
                        <h5 class="modal-title fw-semibold" id="exampleModalLabel">Delete the task?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-0">If you delete the task it will be gone forever. Are you sure you want to
                            proceed?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" data-remove="task">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="scrumboard" id="cancel-row">
            <div class="layout-spacing pb-3">
                <div data-simplebar>
                    <div class="task-list-section">
                        <div id="New" ondrop="drop(event)" ondragover="allowDrop(event)" class="task-list-container">
                            <div class="connect-sorting connect-sorting-todo">
                                <div class="task-container-header">
                                    <h6 class="item-head mb-0 fs-4 fw-semibold" data-item-title="Todo">New</h6>
                                </div>
                                <div class="connect-sorting-content" data-sortable="true">
                                    @foreach($newleads as $new)
                                    <div data-draggable="true" draggable="true" ondragstart="drag(event)" class="card img-task" data-id="{{ $new->id }}">
                                        <div class="card-body">
                                            <div class="task-header">
                                                <div>
                                                    <h4 data-item-title="{{$new->name}}">{{$new->name}}</h4>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <i class="ti ti-dots-vertical text-dark"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                                        <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                                            <i class="ti ti-pencil fs-5"></i>Edit
                                                        </a>
                                                        <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                                            <i class="ti ti-trash fs-5"></i>Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-content">
                                                <p class="mb-0" data-item-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, o eiusmod tempor incid.">
                                                    {{$new->city}} / {{$new->state}}
                                                </p>
                                                <p class="mb-0" data-item-text="{{$new->mobilenumber}}">
                                                    {{$new->mobilenumber}}
                                                </p>
                                                <p class="mb-0" data-item-text="{{$new->inwhichcity}}">
                                                    {{$new->inwhichcity}}
                                                </p>
                                            </div>
                                            <div class="task-body">
                                                <div class="task-bottom">
                                                    <div class="tb-section-1">
                                                        <span class="hstack gap-2 fs-2" data-item-date="{{ $new->created_at->format('d M Y | h:i A')}}">
                                                            <i class="ti ti-calendar fs-5"></i> {{ $new->created_at->format('d M Y | h:i A')}}
                                                        </span>
                                                    </div>
                                                    <div class="tb-section-2">
                                                        <span class="badge text-bg-primary fs-1">{{$new->housecategory}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="Qualified" data-item="qualified" ondrop="drop(event)" ondragover="allowDrop(event)" class="task-list-container" data-action="sorting">
                            <div class="connect-sorting connect-sorting-inprogress">
                                <div class="task-container-header">
                                    <h6 class="item-head mb-0 fs-4 fw-semibold" data-item-title="In Progress">Qualified</h6>
                                </div>
                                <div class="connect-sorting-content" data-sortable="true">
                                    @foreach($qualified as $new)
                                    <div data-draggable="true" draggable="true" ondragstart="drag(event)" class="card img-task" data-id="{{ $new->id }}">
                                        <div class="card-body">
                                            <div class="task-header">
                                                <div>
                                                    <h4 data-item-title="{{$new->name}}">{{$new->name}}</h4>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <i class="ti ti-dots-vertical text-dark"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                                        <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                                            <i class="ti ti-pencil fs-5"></i>Edit
                                                        </a>
                                                        <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                                            <i class="ti ti-trash fs-5"></i>Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-content">
                                                <p class="mb-0" data-item-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, o eiusmod tempor incid.">
                                                    {{$new->city}} / {{$new->state}}
                                                </p>
                                                <p class="mb-0" data-item-text="{{$new->mobilenumber}}">
                                                    {{$new->mobilenumber}}
                                                </p>
                                                <p class="mb-0" data-item-text="{{$new->inwhichcity}}">
                                                    {{$new->inwhichcity}}
                                                </p>
                                            </div>
                                            <div class="task-body">
                                                <div class="task-bottom">
                                                    <div class="tb-section-1">
                                                        <span class="hstack gap-2 fs-2" data-item-date="{{ $new->created_at->format('d M Y | h:i A')}}">
                                                            <i class="ti ti-calendar fs-5"></i> {{ $new->created_at->format('d M Y | h:i A')}}
                                                        </span>
                                                    </div>
                                                    <div class="tb-section-2">
                                                        <span class="badge text-bg-primary fs-1">{{$new->housecategory}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="Not Responded" data-item="not responded" ondrop="drop(event)" ondragover="allowDrop(event)" class="task-list-container" data-action="sorting">
                            <div class="connect-sorting connect-sorting-pending">
                                <div class="task-container-header">
                                    <h6 class="item-head mb-0 fs-4 fw-semibold" data-item-title="Pending">Not Responded</h6>
                                </div>
                                <div class="connect-sorting-content" data-sortable="true">
                                    @foreach($notresponded as $new)
                                    <div data-draggable="true" draggable="true" ondragstart="drag(event)" class="card img-task" data-id="{{ $new->id }}">
                                        <div class="card-body">
                                            <div class="task-header">
                                                <div>
                                                    <h4 data-item-title="{{$new->name}}">{{$new->name}}</h4>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <i class="ti ti-dots-vertical text-dark"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                                        <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                                            <i class="ti ti-pencil fs-5"></i>Edit
                                                        </a>
                                                        <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                                            <i class="ti ti-trash fs-5"></i>Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-content">
                                                <p class="mb-0" data-item-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, o eiusmod tempor incid.">
                                                    {{$new->city}} / {{$new->state}}
                                                </p>
                                                <p class="mb-0" data-item-text="{{$new->mobilenumber}}">
                                                    {{$new->mobilenumber}}
                                                </p>
                                                <p class="mb-0" data-item-text="{{$new->inwhichcity}}">
                                                    {{$new->inwhichcity}}
                                                </p>
                                            </div>
                                            <div class="task-body">
                                                <div class="task-bottom">
                                                    <div class="tb-section-1">
                                                        <span class="hstack gap-2 fs-2" data-item-date="{{ $new->created_at->format('d M Y | h:i A')}}">
                                                            <i class="ti ti-calendar fs-5"></i> {{ $new->created_at->format('d M Y | h:i A')}}
                                                        </span>
                                                    </div>
                                                    <div class="tb-section-2">
                                                        <span class="badge text-bg-primary fs-1">{{$new->housecategory}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="Final" data-item="final" ondrop="drop(event)" ondragover="allowDrop(event)" class="task-list-container" data-action="sorting">
                            <div class="connect-sorting connect-sorting-done">
                                <div class="task-container-header">
                                    <h6 class="item-head mb-0 fs-4 fw-semibold" data-item-title="Done">Final</h6>
                                </div>
                                <div class="connect-sorting-content" data-sortable="true">
                                    @foreach($paymentmode as $new)
                                    <div data-draggable="true" draggable="true" ondragstart="drag(event)" class="card img-task" data-id="{{ $new->id }}">
                                        <div class="card-body">
                                            <div class="task-header">
                                                <div>
                                                    <h4 data-item-title="{{$new->name}}">{{$new->name}}</h4>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <i class="ti ti-dots-vertical text-dark"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                                        <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                                            <i class="ti ti-pencil fs-5"></i>Edit
                                                        </a>
                                                        <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                                            <i class="ti ti-trash fs-5"></i>Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-content">
                                                <p class="mb-0" data-item-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, o eiusmod tempor incid.">
                                                    {{$new->city}} / {{$new->state}}
                                                </p>
                                                <p class="mb-0" data-item-text="{{$new->mobilenumber}}">
                                                    {{$new->mobilenumber}}
                                                </p>
                                                <p class="mb-0" data-item-text="{{$new->inwhichcity}}">
                                                    {{$new->inwhichcity}}
                                                </p>
                                            </div>
                                            <div class="task-body">
                                                <div class="task-bottom">
                                                    <div class="tb-section-1">
                                                        <span class="hstack gap-2 fs-2" data-item-date="{{ $new->created_at->format('d M Y | h:i A')}}">
                                                            <i class="ti ti-calendar fs-5"></i> {{ $new->created_at->format('d M Y | h:i A')}}
                                                        </span>
                                                    </div>
                                                    <div class="tb-section-2">
                                                        <span class="badge text-bg-primary fs-1">{{$new->housecategory}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="Won" data-item="won" ondrop="drop(event)" ondragover="allowDrop(event)" class="task-list-container" data-action="sorting">
                            <div class="connect-sorting connect-sorting-done">
                                <div class="task-container-header">
                                    <h6 class="item-head mb-0 fs-4 fw-semibold" data-item-title="Done">Won</h6>
                                </div>
                                <div class="connect-sorting-content" data-sortable="true">
                                    @foreach($won as $new)
                                    <div data-draggable="true" draggable="true" ondragstart="drag(event)" class="card img-task" data-id="{{ $new->id }}">
                                        <div class="card-body">
                                            <div class="task-header">
                                                <div>
                                                    <h4 data-item-title="{{$new->name}}">{{$new->name}}</h4>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <i class="ti ti-dots-vertical text-dark"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                                        <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                                            <i class="ti ti-pencil fs-5"></i>Edit
                                                        </a>
                                                        <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                                            <i class="ti ti-trash fs-5"></i>Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-content">
                                                <p class="mb-0" data-item-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, o eiusmod tempor incid.">
                                                    {{$new->city}} / {{$new->state}}
                                                </p>
                                                <p class="mb-0" data-item-text="{{$new->mobilenumber}}">
                                                    {{$new->mobilenumber}}
                                                </p>
                                                <p class="mb-0" data-item-text="{{$new->inwhichcity}}">
                                                    {{$new->inwhichcity}}
                                                </p>
                                            </div>
                                            <div class="task-body">
                                                <div class="task-bottom">
                                                    <div class="tb-section-1">
                                                        <span class="hstack gap-2 fs-2" data-item-date="{{ $new->created_at->format('d M Y | h:i A')}}">
                                                            <i class="ti ti-calendar fs-5"></i> {{ $new->created_at->format('d M Y | h:i A')}}
                                                        </span>
                                                    </div>
                                                    <div class="tb-section-2">
                                                        <span class="badge text-bg-primary fs-1">{{$new->housecategory}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--BASSSS HAWA NICKAL GAI THI TUM DONO KII MUJE KARTE KARTE AB YAAD RAKHNA MUJE😂--}}
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
            console.log("Div ID : " + data);
            var targetId = ev.target.id;
            console.log("Dropped in column ID: " + targetId);
        }

        function kanbanSortable() {
            $('[data-sortable="true"]').sortable({
                connectWith: ".connect-sorting-content", // Allow sorting across different columns
                items: ".card", // Specify draggable items
                cursor: "move", // Change cursor when dragging
                placeholder: "ui-state-highlight", // Visual feedback for the drop area
                refreshPosition: true, // Refresh positions when dragging
                update: function(event, ui) {
                    // Get card and column details after dropping
                    var card_id = ui.item.attr("data-id"); // Get the dragged card's ID
                    var box_id = ui.item.closest('.task-list-container').attr("id"); // Get the target column's ID

                    console.log("Card ID: " + card_id + ", Box ID: " + box_id);

                    // Perform AJAX request to update the lead's status
                    $.ajax({
                        url: "{{ route('admin.updateLeadStatusKanban') }}", // Your backend route
                        method: "POST"
                        , data: {
                            _token: "{{ csrf_token() }}", // CSRF token for security
                            card_id: card_id, // Card ID
                            box_status: box_id // Target column ID
                        }
                        , success: function(response) {
                            if (response.success) {
                                console.log(response.message);
                            } else {
                                console.error("Failed to update status:", response.message);
                            }
                        }
                        , error: function(xhr) {
                            console.error("Error updating status:", xhr.responseText);
                        }
                    });
                }
            }).disableSelection();
        }

    </script>
</x-app-layout>
