<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mentoring-laravel.dreamguystech.com/public/admin/index_admin by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:34:54 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Mentoring - Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template')}}/assets_admin/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('template')}}/assets_admin/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('template')}}/assets_admin/css/font-awesome.min.css">
    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{ asset('template')}}/assets_admin/css/feathericon.min.css">
    <link rel="stylesheet" href="{{ asset('template')}}/assets_admin/plugins/morris/morris.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('template')}}/assets_admin/plugins/select2/css/select2.min.css">
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="{{ asset('template')}}/assets_admin/plugins/datatables/datatables.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('template')}}/assets_admin/css/style.css">
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a href="index_admin.html" class="logo">
                    <img src="{{ asset('template')}}/assets_admin/img/logo.png" alt="Logo">
                </a>
                <a href="index_admin.html" class="logo logo">
                    <img src="{{ asset('template')}}/assets_admin/img/logo.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <!-- /Logo -->


            <!-- Mobile Menu Toggle -->
            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>
            <!-- /Mobile Menu Toggle -->

            <!-- Header Right Menu -->
            <ul class="nav user-menu">

                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="{{ asset('template')}}/assets_admin/img/profiles/avatar-12.jpg" width="31" alt="Ryan Taylor"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{ asset('template')}}/assets_admin/img/profiles/avatar-12.jpg" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>{{Auth:: user()->name}}</h6>
                                <p class="text-muted mb-0">{{Auth:: user()->usertype}}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                            @csrf
                        </form>

                    </div>
                </li>
                <!-- /User Menu -->

            </ul>
            <!-- /Header Right Menu -->

        </div>
        <!-- /Header -->
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span><i class="fe fe-home"></i> Home</span>
                        </li>
                        <li class="active">
                            <a href="{{ route('admin.dashboard') }}"><span>Dashboard</span></a>
                        </li>
                        
                        <li class="">
                            <a href="category"><span>Category</span></a>
                        </li>
                        <li class="">
                            <a href="booking-list.html"><span>Booking List</span></a>
                        </li>


                        <li class="">
                            <a href="settings.html"><span>Settings</span></a>
                        </li>

                        
                        <li class="">
                            <a href="{{ route('users.index') }}"><span>User List</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><span>Blog</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="" href="{{ route('post.index') }}"> Blog </a></li>
                                <li><a class="" href="{{ route('post.index') }}"> Blog Details </a></li>
                                <li><a class="" href="{{ route('post.create') }}"> Add Blog </a></li>
                                <li><a class="" href="{{ route('post.index') }}"> Edit Blog </a></li>
                            </ul>
                        </li>





                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->
        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Welcome Admin!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-primary border-primary">
                                        <i class="fe fe-users"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>168</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h6 class="text-muted">Members</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-success">
                                        <i class="fe fe-credit-card"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>487</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">

                                    <h6 class="text-muted">Appointments</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">


                        <div class="dash-widget-header">


                            </span>

                        </div>
                        <div class="dash-widget-info">


                        </div>


                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">






                        <div class="dash-widget-info">


                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">

                    <!-- Sales Chart -->

                    <!-- /Sales Chart -->

                </div>
                <div class="col-md-12 col-lg-6">

                    <!-- Invoice Chart -->

                    <!-- /Invoice Chart -->

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex">

                    <!-- Recent Orders -->
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Student List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Instructor Name</th>
                                            <th>Course</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('template')}}/assets_admin/img/profiles/avatar-08.jpg" alt="User Image"></a>
                                                    <a href="profile.html">James Amen</a>
                                                </h2>
                                            </td>
                                            <td>Maths</td>

                                        </tr>
                                        <tr>


                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Recent Orders -->

                </div>
                <div class="col-md-6 d-flex">

                    <!-- Feed Activity -->
                    <div class="card  card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Student List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>E-mail</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('template')}}/assets_admin/img/user/user.jpg" alt="User Image"></a>
                                                    <a href="profile.html"> </a>
                                                </h2>
                                            </td>
                                            <td>8286329170</td>

                                        </tr>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Feed Activity -->

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <!-- Recent Orders -->
                    <div class="card card-table">
                        <div class="card-header">
                            <h4 class="card-title">Booking List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Mentor Name</th>
                                            <th>Course</th>
                                            <th>Mentee Name</th>
                                            <th>Booking Time</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('template')}}/assets_admin/img/profiles/avatar-08.jpg" alt="User Image"></a>
                                                    <a href="profile.html">James Amen</a>
                                                </h2>
                                            </td>
                                            <td>Maths</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('template')}}/assets_admin/img/user/user.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Jonathan Doe </a>
                                                </h2>
                                            </td>
                                            <td>9 Nov 2019 <span class="text-primary d-block">11.00 AM - 11.15 AM</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_1" class="check" checked>
                                                    <label for="status_1" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>

                                        </tr>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Recent Orders -->

                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('template')}}/assets_admin/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('template')}}/assets_admin/js/popper.min.js"></script>
    <script src="{{ asset('template')}}/assets_admin/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('template')}}/assets_admin/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Form Validation JS -->
    <script src="{{ asset('template')}}/assets_admin/js/form-validation.js"></script>

    <!-- Mask JS -->
    <script src="{{ asset('template')}}/assets_admin/js/jquery.maskedinput.min.js"></script>
    <script src="{{ asset('template')}}/assets_admin/js/mask.js"></script>

    <!-- Select2 JS -->
    <script src="{{ asset('template')}}/assets_admin/plugins/select2/js/select2.min.js"></script>
    <script src="{{ asset('template')}}/assets_admin/plugins/raphael/raphael.min.js"></script>
    <script src="{{ asset('template')}}/assets_admin/plugins/morris/morris.min.js"></script>
    <script src="{{ asset('template')}}/assets_admin/js/chart.morris.js"></script>
    <!-- Datatables JS -->
    <script src="{{ asset('template')}}/assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('template')}}/assets_admin/plugins/datatables/datatables.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('template')}}/assets_admin/js/script.js"></script>
</body>

<!-- Mirrored from mentoring-laravel.dreamguystech.com/public/admin/index_admin by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:35:09 GMT -->

</html>