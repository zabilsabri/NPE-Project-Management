<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title }}</title>

    <!-- General CSS Files -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <!-- Multi Search -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('Stisla/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Stisla/assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Layout/sidebar.css') }}">
</head>

<body>
    <div class="main-wrapper">
        <nav class="navbar navbar-expand-lg main-navbar">
            <ul class="navbar-nav d-inline mr-auto">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"
                            style="color: #000"></i></a></li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li>
                    <a href="{{ route('logout') }}" class="btn btn-outline-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div>
                    <div class="sidebar-brand">
                        <a href="index.html"><img id="main-logo" src="{{ asset('img/Admin/main logo.jpg') }}"
                                alt=""></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <img src="{{ asset('img/Admin/logo npe.svg') }}" alt="">
                    </div>
                    <ul class="sidebar-menu">
                        <li class="{{ Route::is('home.admin') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('home.admin') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a>
                        </li>
                        <li
                            class="{{ Route::is('project.admin') || Route::is('project-create.admin') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('project.admin') }}"><i
                                    class="fas fa-clipboard-list"></i>
                                <span>Project</span></a></li>
                        <li
                            class="{{ Route::is('employee.admin') || Route::is('employee-create.admin') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('employee.admin') }}"><i class="fas fa-users"></i>
                                <span>Employees</span></a></li>

                        <!-- user sidebar -->
                        <li class="{{ Route::is('home.user') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('home.user') }}"><i class="fas fa-home"></i> <span>Home</span></a></li>
                        <li
                            class="{{ Route::is('user.projects') || Route::is('user.projects.detail') || Route::is('user.projects.finished') || Route::is('user.projects.new-milestone') || Route::is('user.projects.detail-milestone') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('user.projects') }}"><i
                                    class="fas fa-clipboard-list"></i>
                                <span>My Project</span></a></li>
                        <li class="{{ Route::is('user.my-task') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('user.my-task') }}"><i class="fas fa-tasks"></i><span>My
                                    Task</span></a></li>

                    </ul>
                </div>
                <ul class="sidebar-menu">
                    <li>
                        <a class="nav-link" href="blank.html"><i class="fas fa-user" id="photo-profile"></i>
                            <span>
                                <p class="m-0" id="username">admin</p>
                                <p class="m-0" id="email">admin@email.com</p>
                            </span>
                        </a>
                    </li>
                </ul>
        </div>
        </aside>
    </div>
    <div class="main-content">
        <section class="section">
            <div class="section-body mt-0">
                @yield('content')
            </div>
        </section>



        <!-- General JS Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="../assets/js/stisla.js"></script>

        <!-- Datatables -->
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

        <script>
            $(document).ready(function() {
                $('#tableProject').DataTable({
                    scrollX: true,
                    language: {
                        search: '',
                        searchPlaceholder: "Search...",
                        paginate: {
                            next: ">",
                            previous: "<"
                        }
                    },
                    responsive: true,
                });

                $('#tableHomeProject').DataTable({
                    "dom": '<"toolbar-project">frt',
                    scrollX: true,
                    language: {
                        search: '',
                        searchPlaceholder: "Search...",
                        paginate: {
                            next: ">",
                            previous: "<"
                        }
                    },
                    responsive: true,
                });
                $('div.toolbar-project').html('<h5 class="float-left">Data manajemen projek NPE Digital</h5>');

                $('#tableUserHomeProject').DataTable({
                    "dom": '<"toolbar-project-user">frt',
                    scrollX: true,
                    language: {
                        search: '',
                        searchPlaceholder: "Search...",
                        paginate: {
                            next: ">",
                            previous: "<"
                        }
                    },
                    responsive: true,
                });
                $('div.toolbar-project-user').html('<h5 class="float-left">My Project</h5>');
                
                $('#tableMyTaskUser').DataTable({
                    "dom": '<"toolbar-my-task-user">frt',
                    scrollX: true,
                    language: {
                        search: '',
                        searchPlaceholder: "Search...",
                        paginate: {
                            next: ">",
                            previous: "<"
                        }
                    },
                    responsive: true,
                });
                $('div.toolbar-my-task-user').html('<h5 class="float-left">Daftar Task</h5>');
                
                $('#tableFinishedProjectUser').DataTable({
                    "dom": '<"toolbar-finished-project-user">frt',
                    scrollX: true,
                    language: {
                        search: '',
                        searchPlaceholder: "Search...",
                        paginate: {
                            next: ">",
                            previous: "<"
                        }
                    },
                    responsive: true,
                });
                $('div.toolbar-finished-project-user').html('<h5 class="float-left">Data Proyek yang Telah Selesai Dikerjakan</h5>');

                $('#tableProgrammerProjectDetail').DataTable({
                    "dom": '<"toolbar-programmer-project-detail">frt',
                    scrollX: true,
                    language: {
                        search: '',
                        searchPlaceholder: "Search...",
                        paginate: {
                            next: ">",
                            previous: "<"
                        }
                    },
                    responsive: true,
                });
                $('div.toolbar-programmer-project-detail').html('<h5 class="float-left">Programmer</h5>');

                $('#tableHomeEmployee').DataTable({
                    "dom": '<"toolbar">frt',
                    scrollX: true,
                    language: {
                        search: '',
                        searchPlaceholder: "Search...",
                        paginate: {
                            next: ">",
                            previous: "<"
                        }
                    },
                    responsive: true,
                });
                $('div.toolbar').html('<h5 class="float-left">Daftar Karyawan NPE Digital</h5>');

                $('#tableUserHomeTask').DataTable({
                    "dom": '<"toolbar-user">frt',
                    scrollX: true,
                    language: {
                        search: '',
                        searchPlaceholder: "Search...",
                        paginate: {
                            next: ">",
                            previous: "<"
                        }
                    },
                    responsive: true,
                });
                $('div.toolbar-user').html('<h5 class="float-left">My Task</h5>');
            });
        </script>

        <!-- Template JS File -->
        <script src="{{ asset('Stisla/assets/js/scripts.js') }}"></script>
        <script src="{{ asset('Stisla/assets/js/custom.js') }}"></script>
        <!-- Page Specific JS File -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/i18n/defaults-*.min.js"></script>
        @yield('script')
</body>

</html>
