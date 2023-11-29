@extends('Layout.sidebar', ['title' => 'Home'])
<link rel="stylesheet" href="{{ asset('css/User/detail-milestone.css') }}">
<link rel="stylesheet" href="{{ asset('css/Layout/datatables.css') }}">


@section('content')
<div class="card">
    <div class="section-header d-flex justify-content-between">
        <div class="d-flex flex-column header-title">
            <div class="d-flex ml-5">
                <p class="breadcrumb-item mb-0"><a href="#">Project</a></p>
                <p class="breadcrumb-item mb-0"><a href="{{ route('user.projects.detail', ['id' => $milestone -> project -> id]) }}">{{ $milestone -> project -> nama }}</a></p>
                <p class="breadcrumb-item active mb-0">{{ $milestone -> nama }}</p>
            </div>
            <div class="d-flex">
                <span id="header-line"></span>
                <div class="title d-flex flex-column ml-5">
                    <h1 class="mt-0">{{ $milestone -> nama }}</h1>
                    
                    @if($milestoneStatus == true)
                        @if($milestone -> project -> pm -> nama == Auth::user()->nama && $milestone -> project -> status != 1 && $milestone -> project -> status != 3)
                        <div class="success-button-section">
                            @if($milestone -> status == 'Belum Selesai')
                            <a href="{{ route('user.projects.update-milestone-status', ['id' => $milestone -> id, 'status' => 1]) }}"><button onclick="" class="btn btn-success mt-4 px-3 py-2">
                                    <h6>Finish Milestone</h6>
                                </button>
                            </a>
                            @elseif($milestone -> status == 'Selesai')
                            <a href="{{ route('user.projects.update-milestone-status', ['id' => $milestone -> id, 'status' => 0]) }}"><button onclick="" class="btn btn-danger mt-4 px-3 py-2">
                                    <h6>Unfinish Milestone</h6>
                            </button>
                            </a>
                            @endif
                        </div>
                        @endif
                    @endif

                    <div class="milestone-description mt-3">
                        <p>{{ $milestone -> detail }}</p>
                    </div>
                    

                </div>
            </div>
        </div>

        <div class="image-header-section d-flex mx-5 pr-5">
            <div class="due-date-section py-2 px-4 d-flex flex-column align-items-center">
                <h6 class="mb-0">Deadline</h6>
                <h6 class="mb-0">{{ $milestone -> deadline }}</h6>
            </div>
        </div>
    </div>
    <div class="card-body ml-5">
        @if($milestone -> status == 'Belum Selesai')
        <div class="Task-section p-4 mb-5">
            <div class="header d-flex align-items-center mx-3 justify-content-between">
                <h5 class="mb-0">Task List</h5>
                <form action="{{ route('user.verify-task') }}" method="post">
                @csrf
                @if($milestone -> project -> pm_id == Auth::user()->id)
                <button onclick="" type="submit" class="btn btn-success">
                    <h6 class="m-0 p-2">Validate Task</h6>
                </button>
                @endif
            </div>
            <div class="body d-flex flex-column gap-1 mt-3">

                <!-- Task item -->
                @foreach($milestone -> tasks as $task)
                <div class="description-task-container d-flex">
                    @if($task -> is_reviewed == 0)
                    @if($task -> milestone -> project -> pm_id == Auth::user()->id && $task -> status == 1)
                        <input class="form-check mt-2" type="checkbox" name="task_status[]" value="{{ $task->id }}" id="flexCheckDisabled" {{ $task->is_reviewed ? 'checked' : '' }}>
                    @elseif($task -> milestone -> project -> pm_id == Auth::user()->id && $task -> status == 0)
                        <input class="form-check mt-2" type="checkbox" name="task_status[]" value="{{ $task->id }}" id="flexCheckDisabled" disabled>
                    @endif
                    </form>
                    <div class="desc-container ml-3 py-2 px-4">
                        <div class="header-description-section d-flex justify-content-between">
                            <div class="header-title d-flex align-items-center">
                                <h6 class="mb-0" style="color:black;">{{ $task -> nama }}</h6>
                                <p class="mb-0 ml-3">{{ $task -> user -> nama }}</p>
                            </div>
                            <div class="right-section d-flex align-items-center">
                                <p class="mb-0 ml-3 me-2">
                                    @if($task -> is_reviewed == 0 && $task -> status == 0)
                                        <span class="badge badge-danger">Belum Selesai</span>
                                    @elseif($task -> is_reviewed == 0 && $task -> status == 1)
                                        <span class="badge badge-warning">Sedang Direview</span>
                                    @endif
                                </p>
                                @if($milestone -> project -> pm_id == Auth::user()->id)
                                <a class="mr-3" href="#"><img src="{{ asset('img/Admin/pensil.png') }}" class="btn-edit" data-toggle="modal" data-target="#modal-edit-task{{ $task -> id }}" alt="pencil"></a>
                                <a class="mr-3" href="#"><img src="{{ asset('img/Admin/zabil.png') }}" class="btn-delete" alt="pensil" data-toggle="modal" data-target="#modal-hapus-task{{ $task -> id }}" alt="sampah"></a>
                                @endif
                                <div class="dropdown-button d-flex align-items-center">
                                    <input type="checkbox">
                                    <i class="fas fa-chevron-down" style="font-size: 1.5rem; color:black;"></i>
                                </div>
                            </div>
                        </div>
                        <div class="task-description-section mt-2">
                            <div class="desc">
                                <p>{{ $task -> detail }}</p>
                            </div>
                            <div class="due-date d-flex justify-content-end">
                                <h6 class="mb-0">{{ $task -> deadline }}</h6>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

                @push('modal')
                @if($milestone -> project -> pm_id == Auth::user()->id)
                <div class="modal" id="modal-edit-task{{ $task -> id }}" aria-modal="true" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="row">
                                    <h4 class="modal-title ml-4 mb-2 align-self-center">Edit Task</h4>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">x</span>
                                </button>
                            </div>
                            <span style="width: 100%; height: 1px; background-color: #D6DDED;"></span>
                            <form action="{{ route('user.projects.update-task', ['id' => $task -> id]) }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="new-edit-task-section row">
                                        <div class="left-container col-md-6">
                                            <div class="form-group">
                                                <label for="inputTaskName">Task Name <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" name="nama" id="inputTaskName" value="{{ $task -> nama }}" placeholder="Task Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputDueDate">Due Date <span style="color:red;">*</span></label>
                                                <input type="date" class="form-control" name="deadline" value="{{ $task -> deadline }}" id="inputDueDate" required>
                                            </div>
                                        </div>
                                        <div class="right-container col-md-6">
                                            <div class="form-group">
                                                <label for="taskDetailForm">Task Detail <span style="color:red;">*</span></label>
                                                <textarea class="form-control" id="taskDetailForm" name="detail" rows="3" placeholder="Milestone Detail">{{ $task -> detail }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="select-programmer-section">
                                        <div class="form-group col m-0 p-0">
                                            <label for="inputState">Programmer</label>
                                            <select class="selectpicker form-control" name="assign_to_id" id="inputState" data-live-search="true" required>
                                                <option data-tokens="mustard" value="{{ $task -> user -> id }}">-- {{ $task -> user -> nama }}</option>
                                                @foreach($milestone -> project -> employees as $programmer)
                                                    <option data-tokens="mustard" value="{{ $programmer -> id }}">{{ $programmer -> nama }}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" value="{{ $milestone -> id }}" name="milestone_id">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="btn-hapus">Konfirmasi</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                </div>
                @endif

                <div class="modal fade" id="modal-hapus-task{{ $task -> id }}" aria-modal="true" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="row">
                                    <span class="col align-self-center"><img src="{{ asset('img/Admin/icon.svg')}}" alt=""></span>
                                    <h4 class="modal-title ml-3 align-self-center">Hapus Data Projek</h4>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">x</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Data yang sudah dihapus tidak bisa dikembalikan</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a type="button" href="{{ route('user.projects.delete-task', ['id' => $task -> id]) }}" class="btn btn-primary" id="btn-hapus">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endpush


                @endforeach
                @if($milestone -> project -> pm_id == Auth::user()->id && $milestone -> status == 'Belum Selesai')
                <!-- button new task -->
                <div class="button-section mt-3 d-flex">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-new-task" style="width: 100%; height: 2rem;"><i class="fas fa-plus"></i></button>
                </div>
                @endif
            </div>
        </div>
        @endif
        <div class="Task-section p-4">
            <div class="header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Completed Task List</h5>
            </div>
            <div class="body d-flex flex-column gap-1 mt-3">

                <!-- Task item -->
                @forelse($completedTask as $task)
                <div class="description-task-container d-flex">
                    <div class="desc-container ml-3 py-2 px-4">
                        <div class="header-description-section d-flex justify-content-between">
                            <div class="header-title d-flex align-items-center">
                                <h6 class="mb-0" style="color:black;">{{ $task -> nama }}</h6>
                                <p class="mb-0 ml-3">{{ $task -> user -> nama }}</p>
                            </div>
                            <div class="right-section d-flex align-items-center">
                                @if($milestone -> project -> pm_id == Auth::user()->id && $milestone -> status == 'Belum Selesai')
                                <a class="mr-3" href="#"><img src="{{ asset('img/Admin/zabil.png') }}" class="btn-delete" alt="pensil" data-toggle="modal" data-target="#modal-unverify-task{{ $task -> id }}" alt="sampah"></a>
                                @endif
                                <div class="dropdown-button d-flex align-items-center">
                                    <input type="checkbox">
                                    <i class="fas fa-chevron-down" style="font-size: 1.5rem; color:black;"></i>
                                </div>
                            </div>
                        </div>
                        <div class="task-description-section mt-2">
                            <div class="desc">
                                <p>{{ $task -> detail }}</p>
                            </div>
                            <div class="due-date d-flex justify-content-end">
                                <h6 class="mb-0">{{ $task -> deadline }}</h6>
                            </div>
                        </div>
                    </div>
                </div>

                @push('modal')
                <div class="modal fade" id="modal-unverify-task{{ $task -> id }}" aria-modal="true" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="row">
                                    <span class="col align-self-center"><img src="{{ asset('img/Admin/icon.svg')}}" alt=""></span>
                                    <h4 class="modal-title ml-3 align-self-center">Tandai Task Ini Belum Selesai?</h4>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">x</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Task ini akan ditandai bahwa belum selesai</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a type="button" href="{{ route('user.unverify-task', ['id' => $task -> id]) }}" class="btn btn-primary" id="btn-hapus">Ok</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endpush
                @empty
                <div class="text-center">
                    <h6 class="mb-0" style="color:black;">Belum ada task yang selesai!</h6>
                </div>
                @endforelse              
            </div>
        </div>

    </div>

</div>
@endsection

@if($milestone -> project -> pm_id == Auth::user()->id)
<div class="modal" id="modal-new-task" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <h4 class="modal-title ml-4 mb-2 align-self-center">Add Task</h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <span style="width: 100%; height: 1px; background-color: #D6DDED;"></span>
            <form action="{{ route('user.projects.store-task') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="new-edit-task-section row">
                        <div class="left-container col-md-6">
                            <div class="form-group">
                                <label for="inputTaskName">Task Name <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="nama" id="inputTaskName" placeholder="Task Name" required>
                            </div>
                            <div class="form-group">
                                <label for="inputDueDate">Due Date <span style="color:red;">*</span></label>
                                <input type="date" class="form-control" name="deadline" id="inputDueDate" required>
                            </div>
                        </div>
                        <div class="right-container col-md-6">
                            <div class="form-group">
                                <label for="taskDetailForm">Task Detail <span style="color:red;">*</span></label>
                                <textarea class="form-control" id="taskDetailForm" name="detail" rows="3" placeholder="Milestone Detail"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="select-programmer-section">
                        <div class="form-group col m-0 p-0">
                            <label for="inputState">Programmer</label>
                            <select class="selectpicker form-control" name="assign_to_id" id="inputState" data-live-search="true" required>
                                <option data-tokens="mustard" value="0">Select Programmer</option>
                                @foreach($milestone -> project -> employees as $programmer)
                                    <option data-tokens="mustard" value="{{ $programmer -> id }}">{{ $programmer -> nama }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" value="{{ $milestone -> id }}" name="milestone_id">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btn-hapus">Konfirmasi</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
@endif

@section('script')
<script>
    const arrowInputs = document.querySelectorAll('.dropdown-button input');
    const descContainer = document.querySelectorAll('.desc-container');

    arrowInputs.forEach(function(arrowInput, index) {
        arrowInput.addEventListener('click', function(){
            descContainer[index].classList.toggle('checked');
        });
    });
</script>
@endsection