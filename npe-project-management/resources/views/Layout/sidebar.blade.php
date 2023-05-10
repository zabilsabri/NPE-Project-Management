<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{$title}}</title>

  <!-- General CSS Files -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('Stisla/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('Stisla/assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('css/Admin/sidebar.css') }}">
</head>

<body>
    <div class="main-wrapper">
      <nav class="navbar navbar-expand-lg main-navbar">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars" style="color: #000"></i></a></li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div>
          <div class="sidebar-brand">
            <a href="index.html"><img src="{{ asset('img/Admin/main logo.jpg') }}" alt=""></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <img src="{{ asset('img/Admin/logo npe.svg') }}" alt="">
          </div>
          <ul class="sidebar-menu">
              <li class="active"><a class="nav-link" href="blank.html"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
              <li><a class="nav-link" href="blank.html"><i class="fas fa-clipboard-list"></i> <span>Project</span></a></li>
              <li><a class="nav-link" href="blank.html"><i class="fas fa-users"></i> <span>Employees</span></a></li>
            </ul>
          </div>
            <ul class="sidebar-menu">
              <li><a class="nav-link" href="blank.html"><i class="fas fa-user" id="photo-profile"></i> 
                <span>
                  <p class="m-0" id="username">admin</p>
                  <p class="m-0" id="email">admin@email.com</p>
                </span>
              </a></li>
            </ul>
          </div>
        </aside>
      </div>
      <div class="main-content">
        @yield('content')
      </div>



  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{ asset('Stisla/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('Stisla/assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
</body>
</html>
