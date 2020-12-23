<!-- Mirrored from mentoring-laravel.dreamguystech.com/public/dashboard-mentee by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:34:53 GMT -->
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

                </div>
                <ul class="main-nav">

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
                                <p class="text-muted mb-0">{{Auth:: user()->usertype}}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="dashboard-mentee.html">View profile</a>
                        <a class="dropdown-item" href="profile-settings-mentee.html">Profile Settings</a>
                        <a class="dropdown-item" href="profile-settings-mentee.html">Change password</a>


                    </div>
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
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Dashboard</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                    <!-- Sidebar -->
                    <div class="profile-sidebar">
                        <div class="user-widget">
                            <div class="pro-avatar"></div>

                            <div class="user-info-cont">
                                <h4 class="usr-name">{{Auth:: user()->name}}</h4>
                                <p class="mentor-type">{{Auth:: user()->usertype}}</p>
                            </div>
                        </div>

                        <div class="custom-sidebar-nav">
                            <ul>
                                <li><a href="dashboard"><i class="fas fa-home"></i>Dashboard <span><i class="fas fa-chevron-right"></i></span></a></li>
                                <li><a href="change-password.html"><i class=" fas fa-file-signature"></i>Guideline<span><i class="fas fa-chevron-right"></i></span></a></li>
                                <li><a class="active" href="{{ route('posts.index') }}"><i class="fas fa-blog"></i>Blogs <span><i class="fas fa-chevron-right"></i></span></a></li>
                                <li><a href="instructorList"><i class="fas fa-clock"></i>{{ __('Bookings') }} <span><i class="fas fa-chevron-right"></i></span></a></li>
                                <li><a href="favourites.html"><i class="fas fa-paper-plane"></i>Contact Us <span><i class="fas fa-chevron-right"></i></span></a></li>
                                <li><a href="favourites.html"><i class="fas fa-users"></i>About Us <span><i class="fas fa-chevron-right"></i></span></a></li>







                                </form>
                                <li><a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                        <i class="fas fa-sign-out-alt"></i>Logout <span><i class="fas fa-chevron-right"></i></span></a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                            </ul>




                        </div>
                    </div>
                    <!-- /Sidebar -->

                </div>







                <div class="col-md-7 col-lg-8 col-xl-9">

                    <div class="row">



                        <table class="table table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Created Date</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if($posts->count())
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>
                                        <div style="max-width: 70px; max-height:70px;overflow:hidden">
                                            <img src="{{ asset($post->image) }}" class="img-fluid img-rounded" alt="">
                                        </div>
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>

                                    <td>{{ $post->user->usertype }}</td>
                                    <td>{{ $post->created_at->format('d M, Y') }}</td>
                                    <td class="d-flex ">

                                        <a href="{{ route('posts.show', [$post->id]) }}" class="btn btn-sm btn-success mr-1"> <i class="fe fe-eye"></i> View</a>


                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6">
                                        <h5 class="text-center">No posts found.</h5>
                                    </td>
                                </tr>
                                @endif
                            </tbody>



                        </table>
                    </div>

                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>

</div>
</div>


<!-- Delete Model -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif
    $(document).ready(function() {
        bsCustomFileInput.init()
    })
</script>
<!-- Select2 JS -->
<script src="{{ asset('template')}}/assets_admin/plugins/select2/js/select2.min.js"></script>
<!-- Datatables JS -->
<script src="{{ asset('template')}}/assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template')}}/assets_admin/plugins/datatables/datatables.min.js"></script>
<!-- Custom JS -->
<script src="{{ asset('template')}}/assets_admin/js/script.js"></script>
</body>

<!-- Mirrored from mentoring-laravel.dreamguystech.com/public/admin/categories by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:35:18 GMT -->

</html>