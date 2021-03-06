<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mentoring-laravel.dreamguystech.com/public/admin/categories by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:35:18 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>CareerLabs - Create Category</title>
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
                            <a href="  {{ route('admin.dashboard') }}"><span>Dashboard</span></a>
                        </li>
                        <li class="">
                            <a href="mentor.html"><span>Instructor List</span></a>
                        </li>
                        <li class="">
                            <a href="mentee.html"><span>Client List</span></a>
                        </li>
                        <li class="">
                            <a href="{{ route('category.create') }}"><span>Category</span></a>
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
                                <li><a class="" href=" {{ route('post.index') }}"> Blog </a></li>
                                <li><a class="" href="{{ route('post.index') }}"> Blog Details </a></li>
                                <li><a class="active" href="{{ route('post.create') }}"> Add Blog </a></li>
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
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="title">Post title</label>
                                        <input type="name" name="title" value="{{ old('title') }}" class="form-control" placeholder="Enter title">
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
                                        <label for="image">Image</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <textarea name="description" id="description" rows="4" class="form-control" placeholder="Enter description">{{ old('description') }}</textarea>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- /Page Wrapper -->

    <!-- Edit Modal -->
    <div class="modal fade" id="edit_modal" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-content p-2">
                        <div class="modal-header border-0">
                            <h4 class="modal-title">Edit</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form id="update_category" method="post" autocomplete="off" enctype="multipart/form-data" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <input type="hidden" name="csrf_token_name" value="104dbdaf79d7d8e21e4ae9991d166669">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input class="form-control" type="text" value="Painting" name="category_name" id="category_name" data-bv-field="category_name">
                                        <input class="form-control" type="hidden" value="8" name="category_id" id="category_id">
                                        <small class="help-block" data-bv-validator="remote" data-bv-for="category_name" data-bv-result="NOT_VALIDATED" style="display: none;">This category name is already exist</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="category_name" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter category name</small></div>
                                    <div class="form-group">
                                        <label>Category Image</label>
                                        <input class="form-control" type="file" name="category_image" id="category_image">
                                    </div>
                                    <div class="form-group">
                                        <div class="avatar">
                                            <img class="avatar-img rounded" src="{{ asset('template')}}/assets_admin/img/user/user.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-primary" name="form_submit" value="submit" type="submit">Save Changes</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Modal -->

    <!-- Delete Model -->
    <div class="modal fade" id="delete_modal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!--	<div class="modal-header">
						<h5 class="modal-title">Delete</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>-->
                <div class="modal-body">
                    <div class="form-content p-2">
                        <h4 class="modal-title">Delete</h4>
                        <p class="mb-4">Are you sure want to delete?</p>
                        <button type="button" class="btn btn-primary">Delete </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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