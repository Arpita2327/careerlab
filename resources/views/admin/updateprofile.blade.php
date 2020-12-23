<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mentoring-laravel.dreamguystech.com/public/booking by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:35:09 GMT -->
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
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
                                <p class="text-muted mb-0">{{Auth:: user()->usertype}}</p>
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
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Profile</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container">

            <!-- Mentor Widget -->
            <div class="card col-10 mr-auto ml-auto p-0">
                <div class="card-body">
                    <div class="mentor-widget">
                        <div class="user-info-left align-items-center">
                            <div class="mentor-img d-flex flex-wrap justify-content-center">
                                <div class="pro-avatar"></div>

                                <div class="mentor-details m-0">
                                    <p class="user-location m-0"><i class="fas fa-map-marker-alt"></i> Dhaka</p>
                                </div>
                            </div>
                            <div class="user-info-cont">
                                <h4 class="usr-name">{{Auth:: user()->name}} </h4>
                                <p class="mentor-type">{{Auth:: user()->usertype}} </p>

                            </div>
                        </div>
                        <div class="user-info-right d-flex align-items-end flex-wrap">

                        </div>
                    </div>
                </div>
            </div>
            <!-- /Mentor Widget -->

            <!-- Mentor Details Tab -->
            <div class="card col-10 mr-auto ml-auto p-0">
                <div class="card-body custom-border-card pb-0">

                    <!-- Tab Content -->
                    <div class="tab-content pt-0">

                        <!-- Biography Content -->
                        <div role="tabpanel" id="biography" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-md-12">

                                    <!-- About Details -->
                                    <div class="widget about-widget custom-about mb-0">
                                        <h4 class="widget-title">About Me</h4>
                                        <hr />
                                        <p>{{Auth:: user()->description}} </p>

                                    </div>
                                    <!-- /About Details -->

                                </div>
                            </div>
                        </div>
                        <!-- /biography Content -->

                    </div>
                </div>
            </div>

            <div class="card col-10 mr-auto ml-auto p-0">
                <div class="card-body custom-border-card pb-0">

                    <!-- Personal Details -->
                    <div class="widget education-widget mb-0">
                        <h4 class="widget-title">Personal Details</h4>
                        <hr />
                        <div class="experience-box">
                            <ul class="experience-list profile-custom-list">
                                <li>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <span>Gender</span>
                                            <div class="row-result">Female</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <span>Date of Birth</span>
                                            <div class="row-result">01 - 02 - 2000</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <span>Where did you hear about us?</span>
                                            <div class="row-result">Through web search</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Personal Details -->

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

            <!-- Mirrored from mentoring-laravel.dreamguystech.com/public/profile-mentee by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:34:47 GMT -->

</html>