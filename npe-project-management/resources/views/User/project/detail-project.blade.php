@extends('Layout.sidebar', ['title' => 'Home'])
<link rel="stylesheet" href="{{ asset('css/User/detail-project.css') }}">
<link rel="stylesheet" href="{{ asset('css/Layout/datatables.css') }}">

@section('content')
<div class="card">
    <div class="section-header d-flex justify-content-between">
        <div class="d-flex flex-column header-title">
            <div class="d-flex ml-5">
                <p class="breadcrumb-item mb-0"><a href="#">Project</a></p>
                <p class="breadcrumb-item active mb-0">{{ $project -> nama }}</p>
            </div>
            <div class="d-flex">
                <span id="header-line"></span>
                <div class="title d-flex flex-column ml-5">
                    <h1 class="mt-0">{{ $project -> nama }}</h1>
                    <div class="project-type-section d-flex align-items-center mt-1">
                        <span id="square"></span>
                        <h6 class="ml-3 mb-0">{{ $project -> tipe }}</h6>
                    </div>
                    <h6 class="mt-4">Project Manager : <span>{{ $project -> pm -> nama }}</span></h6>
                    <div class="project-description mt-3">
                        <p>{{ $project -> detail }}</p>
                    </div>
                    <div class="project-status-section d-flex align-items-center">
                        <div class="status-section d-flex align-items-center px-3 py-2">
                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="6" cy="6" r="6" fill="#0061C7" />
                            </svg>
                            @if($project -> status == 0)
                            <h6 class="mb-0 ml-2">On Progress</h6>
                            @elseif($project -> status == 1)
                            <h6 class="mb-0 ml-2">Finished</h6>
                            @elseif($project -> status == 2)
                            <h6 class="mb-0 ml-2">Revision Needed</h6>
                            @elseif($project -> status == 3)
                            <h6 class="mb-0 ml-2">Pending</h6>
                            @endif
                        </div>
                    </div>
                    @if($project -> pm -> nama == Auth::user()->nama)
                    <div class="success-button-section">
                        <a href="{{ route('user.projects.report', ['id' => $project->id]) }}"><button onclick="" class="btn btn-success mt-4 px-3 py-2">
                                <h6>Finish Project</h6>
                            </button></a>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="image-header-section mx-5 pr-5">
            <div class="image-section text-center">
                <img id="time-story-set" src="{{ asset('img/User/time-story-set.png') }}" width="70%" alt="time story set">
            </div>
            <div class="row date-status-section mt-3 gap-5 text-center">
                <div class="col-sm-5 mb-1 early-date-section py-2 px-4 flex-column">
                    <h6> Created At </h6>
                    <h5 class="mb-0">{{ $project -> created_at->format('d/m/Y') }}</h5>
                </div>
                <div class="col-sm-5 mb-1 due-date-section py-2 px-4 flex-column">
                    <h6> Deadline At </h6>
                    <h5 class="mb-0">{{ date('d/m/Y', strtotime($project->deadline)) }}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body ml-5">
        <div class="milestone-section p-4 ">
            <div class="header d-flex align-items-center">
                <h5 class="mb-0">Milestone</h5>
                @if($project -> pm -> nama == Auth::user()->nama)
                <a href="{{ route('user.projects.new-milestone', ['id' => $project -> id]) }}"><Button class="add-milestone-btn ml-4"><i class="fas fa-plus"></i> &nbsp; Add Milestone</Button></a>
                @endif
            </div>
            <div class="body d-flex flex-column mt-3 scrollbox">
            @foreach($milestones as $milestone)
                <!-- Milestone item -->
                <div class="milestone-item d-flex justify-content-between align-items-center py-3 px-4 mt-2">
                    <div>
                        <a href="{{ route('user.projects.detail-milestone', [$milestone -> id]) }}">
                            <h5 class="mb-0">{{ $milestone -> nama }}</h5>
                        </a>
                        <h6 class="mb-0">Status: <span> {{ $milestone -> status }} </span></h6>
                        <p class="mb-0">Due Date ({{ $milestone -> deadline }})</p>
                    </div>
                    @if($project -> pm -> id == Auth::user()->id)
                    <div class="action-button d-flex align-items-center">
                        <a class="mr-3" href="{{ route('user.projects.edit-milestone', ['id' => $milestone -> id]) }}"><img src="{{ asset('img/Admin/pensil.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('img/Admin/zabil.png') }}" class="btn-delete" alt="pensil" data-toggle="modal" data-target="#modal-hapus-milestone{{ $milestone -> id }}" alt="sampah"></a>
                    </div>
                    @endif
                </div>

                @push('modal')
                <div class="modal fade" id="modal-hapus-milestone{{ $milestone -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="row">
                                    <span class="col align-self-center"><img src="{{ asset('img/Admin/icon.svg')}}" alt=""></span>
                                    <h4 class="modal-title ml-3 align-self-center">Hapus Data Milestone</h4>
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
                                <a type="button" href="{{ route('user.projects.delete-milestone', ['id' => $milestone -> id]) }}" class="btn btn-primary" id="btn-hapus">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endpush


            @endforeach
            </div>
        </div>

        @if($project -> pm -> nama != Auth::user()->nama)
        <!-- My Task Section for User -->
        <div class="Task-section p-4 mt-5">
            <form action="{{ route('user.update-done-task') }}" method="POST">
                @csrf
                <div class="header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">My Task</h5>
                    <button onclick="" type="submit" class="btn btn-success">
                        Update Task
                    </button>
                </div>
                <div class="body d-flex flex-column gap-1 mt-3">
                    @forelse($tasks as $task)
                    <!-- Task item -->
                    <div class="description-task-container d-flex">
                        <input class="form-check mt-2" value="{{ $task->id }}" name="task_status[]" type="checkbox" id="flexCheckDisabled">
                        <div class="desc-container ml-3 py-2 px-4">
                            <div class="header-description-section d-flex justify-content-between">
                                <div class="header-title d-flex align-items-center">
                                    <h6 class="mb-0" style="color:black;">{{ $task -> nama }}</h6>
                                    <p class="mb-0 ml-3">{{ $task -> user_nama }}</p>
                                </div>
                                <div id="test" class="dropdown-button d-flex align-items-center">
                                    <input type="checkbox">
                                    <i class="fas fa-chevron-down" style="font-size: 1.5rem; color:black;"></i>
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
                    @empty
                    <div class="description-task-container d-flex">
                        <div class="desc-container ml-3 py-2 px-4">
                            <div class="header-description-section d-flex justify-content-between">
                                <div class="header-title d-flex align-items-center">
                                    <h6 class="mb-0" style="color:black;">Anda Belum Memiliki Task!</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </form>
        </div>
        @endif

        <div class="table-responsive mt-5" style="width:100%!important">
            <table class="table display nowrap" style="width:100%" id="tableProgrammerProjectDetail">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">No. Hp</th>
                        <th scope="col">Divisi</th>
                        <th scope="col">Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($project -> employees as $employee)
                    <tr>
                        <td>{{ $employee -> nama }}</td>
                        <td>{{ $employee -> email }}</td>
                        <td>{{ $employee -> nomorTelpon }}</td>
                        <td>{{ $employee -> divisi }}</td>
                        <td>{{ $employee -> jabatan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

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