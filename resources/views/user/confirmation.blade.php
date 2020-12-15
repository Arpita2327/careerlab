<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mentoring-laravel.dreamguystech.com/public/booking-success by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:34:53 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>CARRER LABS - Online educational consultancy website</title>

    <!-- Favicons -->
    <link type="image/x-icon" href="{{ asset('template')}}/assets/img/favicon.png" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('template')}}/assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('template')}}/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('template')}}/assets/plugins/fontawesome/css/all.min.css">
    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ asset('template')}}/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('template')}}/assets/css/bootstrap-datetimepicker.min.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('template')}}/assets/plugins/select2/css/select2.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('template')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('template')}}/assets/css/owl.theme.default.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('template')}}/assets/css/style.css">
</head>
<!-- Loader -->
<!-- /Loader  -->
<!-- Header -->
<header class="header">
    <div class="header-fixed">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="index-2.html" class="navbar-brand logo">
                    <img src="{{ asset('template')}}/assets/img/logo.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index-2.html" class="menu-logo">
                        <img src="{{ asset('template')}}/assets/img/logo.png" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li class="">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="has-submenu  ">
                        <a href="index-2.html">Guideline<i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class=""><a href="map-grid.html">For JSC students</a></li>
                            <li class=""><a href="map-list.html">For SSC students</a></li>
                            <li class=""><a href="map-list.html">For HSC students</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="blog-list.html">Blog</a>

                    </li>

                    <li class="">
                        <a href="">About US</a>
                    </li>
                    <li class="login-link">
                        <a href="login.html">Login / Signup</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item dropdown has-arrow logged-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{ asset('template')}}/assets/img/user/user.jpg" width="31" alt="Darren Elder">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{ asset('template')}}/assets/img/user/user.jpg" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>{{Auth:: user()->name}}</h6>
                                <p class="text-muted mb-0">{{Auth:: user()->type}}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="dashboard-mentee.html">View profile</a>
                        <a class="dropdown-item" href="profile-settings-mentee.html">Profile Settings</a>
                        <a class="dropdown-item" href="profile-settings-mentee.html">Change password</a>

                </li>
                <!-- /User Menu -->
            </ul>

        </nav>
    </div>
</header>
<!-- /Header -->
<div class="main-wrapper">

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Confirmation</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content success-page-cont">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <!-- Success Card -->
                    <div class="card success-card">
                        <div class="card-body">
                            <div class="success-cont">
                                <i class="fas fa-check"></i>
                                <h3>Appointment booked Successfully!</h3>
                                <p>Appointment booked with <strong>Instructor2</strong><br> on <strong>12 Nov 2019 5:00PM to 6:00PM</strong></p>
                                <a href="dashboard" class="btn btn-primary view-inv-btn">Go to dashbord</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Success Card -->

                </div>
            </div>

        </div>
    </div>
    <!-- /Page Content -->
    <!-- Footer -->
    <footer class="footer">

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-about">


                        </div>
                        <!-- /Footer Widget -->

                    </div>






                    <!-- Footer Widget -->

                    <!-- /Footer Widget -->

                </div>

            </div>
        </div>

        <!-- /Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container-fluid">

                <!-- Copyright -->
                <div class="copyright">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copyright-text">

                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="mb-0">&copy; 2020 CareerLabs. All rights reserved.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->

            </div>
        </div>
        <!-- /Footer Bottom -->

    </footer>
    <!-- /Footer -->
    <!-- jQuery -->
    <script src="{{ asset('template')}}/assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('template')}}/assets/js/popper.min.js"></script>
    <script src="{{ asset('template')}}/assets/js/bootstrap.min.js"></script>
    <!-- Select2 JS -->
    <script src="{{ asset('template')}}/assets/plugins/select2/js/select2.min.js"></script>
    <!-- Datetimepicker JS -->
    <script src="{{ asset('template')}}/assets/js/moment.min.js"></script>
    <script src="{{ asset('template')}}/assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="{{ asset('template')}}/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('template')}}/assets/js/owl.carousel.min.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="{{ asset('template')}}/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="{{ asset('template')}}/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <!-- Circle Progress JS -->
    <!-- <script src="{{ asset('template')}}/assets/js/circle-progress.min.js"></script> -->
    <!-- Custom JS -->
    <script src="{{ asset('template')}}/assets/js/script.js"></script>
    </body>

    <!-- Mirrored from mentoring-laravel.dreamguystech.com/public/booking-success by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:34:53 GMT -->

</html>