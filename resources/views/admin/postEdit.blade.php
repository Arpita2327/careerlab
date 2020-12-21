<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mentoring-laravel.dreamguystech.com/public/admin/categories by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:35:18 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>CareerLabs - Categories Page</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template')}}/assets_admin/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('template')}}/assets_admin/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>

            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

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
        <!-- /Header -->
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span><i class="fe fe-home"></i> Home</span>
                        </li>
                        <li class="">
                            <a href="{{ route('admin.dashboard') }}"><span>Dashboard</span></a>
                        </li>
                        <li class="">
                            <a href="mentor.html"><span>Instructor List</span></a>
                        </li>
                        <li class="">
                            <a href="mentee.html"><span>Client List</span></a>
                        </li>
                        <li class="active">
                            <a href="category"><span>Category</span></a>
                        </li>
                        <li class="">
                            <a href="booking-list.html"><span>Booking List</span></a>
                        </li>


                        <li class="">
                            <a href="settings.html"><span>Settings</span></a>
                        </li>


                        <li class="">
                            <a href="profile.html"><span>My Profile</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><span>Blog</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="" href="blog.html"> Blog </a></li>
                                <li><a class="" href="blog-details.html"> Blog Details </a></li>
                                <li><a class="" href="add-blog.html"> Add Blog </a></li>
                                <li><a class="" href="edit-blog.html"> Edit Blog </a></li>
                            </ul>
                        </li>





                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">post Edit</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href=" {{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post List</a></li>
                                <li class="breadcrumb-item active">Post Edit</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="card-body">
                        <form action="{{ route('post.update', [$post->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Post title</label>
                                <input type="name" name="title" value="{{ $post->title }}" class="form-control" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="category">Post Category</label>

                                <select name="category" id="category" class="form-control">
                                    <option value="" style="display: none" selected>Select Category</option>

                                    @foreach($categories as $c)
                                    <option value="{{ $c->id }}"> {{ $c->name }} </option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-8">
                                        <label for="image">Image</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                            <img src="{{ asset($post->image) }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea name="description" id="description" rows="4" class="form-control" placeholder="Enter description">{{ $post->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Update Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Wrapper -->




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