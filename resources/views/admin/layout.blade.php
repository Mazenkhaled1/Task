<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>
    @yield('styles')
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin/css/fontawesome.all.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/css/adminlte.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('admin/img/logo.png" alt="AdminLTE Logo')}}" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/img/user-profile.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin user</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                ContactUs Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('contactUs.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ContactUS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('contactUs_Page.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ContactUs Page</p>
                </a>
              </li>
            </ul>
          </li>

            {{-- ------------------------------------------ --}}

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                News Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('news.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('posts.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Single</p>
                </a>
              </li>
            </ul>
          </li>

            {{-- ------------------------------------------ --}}
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  About_us
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('about_us_main.index')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Main</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('about_us_header.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Header</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('about_us_content.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Content</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('about_us_property.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Property</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  HomePage
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('home_project.index')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>projects</p>
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="{{route('home_state.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>State</p>
                  </a>
                </li>
               <li class="nav-item">
                  <a href="{{route('home_facility.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Facilities</p>
                  </a>
               </li>
                <li class="nav-item">
                  <a href="{{route('home_image.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Images</p>
                  </a>
                </li> 
                <li class="nav-item">
                  <a href="{{route('home_header.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Header</p>
                  </a>
                </li> 
              </ul>
            </li>
                {{-- ----------------- --}}
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Projects
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('project_header.index')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Header</p>
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="{{route('dura_project.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dura_Projects</p>
                  </a>
                </li>
               <li class="nav-item">
                  <a href="{{route('project_service.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Services</p>
                  </a>
               {{-- </li>
                <li class="nav-item">
                  <a href="{{route('home_image.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Images</p>
                  </a>
                </li> 
                <li class="nav-item">
                  <a href="{{route('home_header.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Header</p>
                  </a>
                </li>  --}}
              </ul>
            </li>
            
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Page three
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  {{----------------------------------------------------- -------- ------}}


 <!-- Main content wrapper -->
 <div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      @yield('main') <!-- Content injected here -->
    </div>
  </section>
</div>


  {{----------------------------------------------------- -------- ------}}
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin/js/jquery.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/js/bootstrap.bundle.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/js/adminlte.js')}}"></script>
@yield('scripts')
</body>
</html>
