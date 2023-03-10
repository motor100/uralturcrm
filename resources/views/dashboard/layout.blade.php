<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Dashboard')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- <link rel="shortcut icon" href="{{ asset('img/favicon.svg') }}" type="image/x-icon"> -->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  @yield('style')
  <link rel="stylesheet" href="{{ asset('/adminpanel/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/adminpanel/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/adminpanel/css/overlayscrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/adminpanel/css/dashboard.css') }}">
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="header main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/dashboard" class="nav-link">Главная</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" href="/admin/testimonials" title="Отзывы">
            <i class="far fa-comments"></i>
            @if(isset($testimonials_count))
              @if($testimonials_count > 0)
                <span id="reviews-counter" class="badge badge-danger navbar-badge">{{ $testimonials_count }}</span>
              @endif
            @endif
          </a>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" href="/dashboard/current-notifications" title="Заказы">
            <i class="far fa-bell"></i>
            <span id="notifications-counter" class="badge badge-warning navbar-badge">3</span>
            <!-- 
            @if(isset($orders_count))
              @if($orders_count > 0)
                <span id="orders-counter" class="badge badge-warning navbar-badge">{{ $orders_count }}</span>
              @endif
            @endif
             -->
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <div class="image">
              <img src="/adminpanel/img/user-icon.jpg" class="img-circle elevation-2" alt="">
            </div>
            <span class="user-name">{{ Auth::user()->name }}</span>
          </a>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <div class="logo">
        <a href="" class="brand-link">
          <!-- <img src="{{ asset('img/favicon.svg') }}" alt="" class="logo-img brand-image img-circle elevation-3"> -->
          <span class="brand-name brand-text font-weight-light">{{ config('app.name') }}</span>
        </a>
      </div>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="/dashboard/clients" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Клиенты</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/events" class="nav-link">
                <i class="nav-icon fas fa-car-side"></i>
                <p>События</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/notifications" class="nav-link">
                <i class="nav-icon fas fa-bell"></i>
                <p>Уведомления</p>
              </a>
            </li>

            
            @role('web-developer')
              <li class="nav-item">
                <a href="/dashboard/users" class="nav-link">
                  <i class="nav-icon nav-icon fas fa-user"></i>
                  <p>Пользователи
                  </p>
                </a>
              </li>
            @endrole

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <div class="content-header mb-2">
        <div class="container-fluid">
          <h1 class="m-0">@yield('title')</h1>
        </div>
      </div>

      @yield('dashboardcontent')

    </div>

    <!-- footer -->
    <footer class="footer text-right">
      <a href="https://adminlte.io" target="_blank">AdminLTE.io</a>
      <div class="d-sm-inline-block">
        <b>Version</b> 3.2.0-rc
      </div>
    </footer>

    <aside class="control-sidebar control-sidebar-dark"></aside>
  </div>

  @yield('script')
  <script src="{{ asset('/adminpanel/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('/adminpanel/js/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('/adminpanel/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/adminpanel/js/summernote-bs4.min.js') }}"></script>
  <script src="{{ asset('/adminpanel/js/jquery.overlayScrollbars.min.js') }}"></script>
  <script src="{{ asset('/adminpanel/js/adminlte.js') }}"></script>
  <script src="{{ asset('/adminpanel/js/demo.js') }}"></script>
  <script src="{{ asset('/adminpanel/js/dashboard.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
</body>
</html>