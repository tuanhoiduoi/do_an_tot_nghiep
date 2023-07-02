
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="/admin/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="/admin/assets/css/styles.min.css" />
  @yield('css')
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="#" class="text-nowrap logo-img" >
            <span style="font-size:25px;padding-left:50px">Home</span>
          </a>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('accounts.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Quản lý tài khoản</span>
              </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('tickets.index')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Quản lý vé</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('showtimes.index')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Quản lý suất chiếu</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('rooms.index')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Quản lý phòng</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('films.index')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Quản lý phim</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('cinemas.index')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Quản lý rạp</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('bills.index')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Quản lý hóa đơn</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('chairs.index')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Quản lý ghế</span>
                </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">

                  <img src="/admin/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="{{url('logout')}}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->



        @yield('content')
      </div>
    </div>
  </div>
  <script src="/admin/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="/admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/admin/assets/js/sidebarmenu.js"></script>
  <script src="/admin/assets/js/app.min.js"></script>
  <script src="/admin/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="/admin/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="/admin/assets/js/dashboard.js"></script>
  @yield('js')
</body>
</html>

