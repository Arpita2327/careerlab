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
                                <div style="height: 200px; width: 200px; overflow:hidden;" class="m-auto">
                                    <img src="{{ asset($user->image) }}" alt="" class="img-fluid rounded-circle img-rounded">
                                </div>
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
                            <li class="breadcrumb-item active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Booking</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">User Profile</h3>
                                <a href="{{ route('users.index') }}" class="btn btn-primary">Go Back to User List</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                       
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="name">User name</label>
                                                        <input type="name" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ $user->name }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">User email</label>
                                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ $user->email }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">User password<small class="text-info">(Enter password if you want change.)</small></label>
                                                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="image">User image</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">User description</label>
                                                        <textarea name="description" id="description" rows="5" class="form-control" placeholder="Write your profile description">{{ $user->description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-lg btn-primary">Update Profile</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div style="height: 200px; width: 200px; overflow:hidden;" class="m-auto">
                                                <img src="{{ asset($user->image) }}" alt="" class="img-fluid rounded-circle img-rounded">
                                            </div>
                                            <div class="mt-2">
                                                <h5>{{ $user->name }}</h5>
                                                <p> {{ $user->email }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
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
    <!-- /Footer --- jQuery -->
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

    <!-- Mirrored from mentoring-laravel.dreamguystech.com/public/profile-settings-mentee by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:34:53 GMT -->

</html>