

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset("admin/vendors/feather/feather.css") }}">
  <link rel="stylesheet" href="{{ asset("admin/vendors/mdi/css/materialdesignicons.min.css") }}">
  <link rel="stylesheet" href="{{ asset("admin/vendors/ti-icons/css/themify-icons.css") }}">
  <link rel="stylesheet" href="{{ asset("admin/vendors/typicons/typicons.css") }}">
  <link rel="stylesheet" href="{{ asset("admin/vendors/simple-line-icons/css/simple-line-icons.css") }}">
  <link rel="stylesheet" href="{{ asset("admin/vendors/css/vendor.bundle.base.css") }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset("admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css") }}">
  <link rel="stylesheet" href="{{ asset("admin/js/select.dataTables.min.css") }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset("admin/css/vertical-layout-light/style.css") }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset("admin/images/favicon.png") }}" />
</head>
<body>
  
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
    
      </div>
      @if (Route::has('login'))
                            <div class="d-flex  p-0 text-right  mt-1">
                                @auth
                                    <div class="d-flex p-0 mb-n5">
                                        <x-app-layout>

                                        </x-app-layout>
                                    </div>
                                @else
                                    <li class="dropdown book-a-table-btn"><a
                                            href="#"><span>Account&nbsp;&nbsp;&nbsp;</span> <i
                                                class="bi bi-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="{{ route('login') }}"
                                                    class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                                    in</a></li>
                                            @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}"
                                                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                                </li>
                                            @endif
                                        </ul>
                                </li>@endauth
                            </div>
                        @endif
                        </a>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
        </div>
      </div>
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" {{ Request::is('/') ? 'active':'' }} href="{{ route('home.index') }}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" {{ Request::is('/') ? 'active':'' }} href="{{ route('admin.menus') }}" >
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Menus</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin-contacts" >
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Contacts</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="/admin-reservations" >
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Reservations</span>
              <i class="menu-arrow"></i>
            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin-tables" >
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  {{ Request::is('/') ? 'active':'' }} href="{{ route('admin.reviews') }}" >
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Reviews</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="/admin-users" >
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin-orders" >
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Orders</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          
        </ul>
        
      </nav>
      <main class="m-2 p-8 !important">
        @yield('content')
      </main>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset("admin/vendors/js/vendor.bundle.base.js") }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset("admin/vendors/chart.js/Chart.min.js") }}"></script>
  <script src="{{ asset("admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js") }}"></script>
  <script src="{{ asset("admin/vendors/progressbar.js/progressbar.min.js") }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset("admin/js/off-canvas.js") }}"></script>
  <script src="{{ asset("admin/js/hoverable-collapse.js") }}"></script>
  <script src="{{ asset("admin/js/template.js") }}"></script>
  <script src="{{ asset("admin/js/settings.js") }}"></script>
  <script src="{{ asset("admin/js/todolist.js") }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset("admin/js/jquery.cookie.js") }}" type="text/javascript"></script>
  <script src="{{ asset("admin/js/dashboard.js") }}"></script>
  <script src="{{ asset("admin/js/Chart.roundedBarCharts.js") }}"></script>
  <!-- End custom js for this page-->
</body>

</html>

