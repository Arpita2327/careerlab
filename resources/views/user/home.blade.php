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
						<div class="progress-bar-custom">
							
							<div class="">
								<div class="" tabindex="0"></div>
								<div class=""></div>
							</div>
						</div>
						<div class="custom-sidebar-nav">
							<ul>
								<li><a href="dashboard" class="active"><i class="fas fa-home"></i>Dashboard <span><i class="fas fa-chevron-right"></i></span></a></li>
								<li><a href="change-password.html"><i class=" fas fa-file-signature"></i>Guideline<span><i class="fas fa-chevron-right"></i></span></a></li>
								<li><a href="blogs"><i class="fas fa-blog"></i>Blogs <span><i class="fas fa-chevron-right"></i></span></a></li>
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
						<div class="col-md-12 col-lg-4 dash-board-list blue">
							<div class="dash-widget">
								<div class="circle-bar">
									<div class="icon-col">
										<i class="fas fa-calendar-check"></i>
									</div>
								</div>
								<div class="dash-widget-info">
									<h3>23</h3>
									<h6>Total Appointments</h6>
								</div>
							</div>
						</div>


					</div>

					<div class="row">
						<div class="col-md-12">
							<h4 class="mb-4">Mentor Lists</h4>

							<div class="card card-table">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>BASIC INFO</th>
													<th>CREATED DATE</th>
													<th class="text-center">TAGS</th>

												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('template')}}/assets/img/user/user.jpg" alt="User Image"></a>
															<a href="profile.html">Instructor1<span>instructor@gmail.com</span></a>
														</h2>
													</td>
													<td>08 April 2020</td>
													<td class="text-center"><span class="pending">PENDING</span></td>

												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('template')}}/assets/img/user/user.jpg" alt="User Image"></a>
															<a href="profile.html">Instructor <span>instructor@gmail.com</span></a>
														</h2>
													</td>
													<td>08 April 2020</td>
													<td class="text-center"><span class="pending">PENDING</span></td>

												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('template')}}/assets/img/user/user.jpg" alt="User Image"></a>
															<a href="profile.html">Instructor4 <span>instructor4@gmail.com</span></a>
														</h2>
													</td>
													<td>08 April 2020</td>
													<td class="text-center"><span class="pending">PENDING</span></td>

												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('template')}}/assets/img/user/user.jpg" alt="User Image"></a>
															<a href="profile.html">instructor5 <span>instructor5@gmail.com</span></a>
														</h2>
													</td>
													<td>08 April 2020</td>
													<td class="text-center"><span class="accept">ACCEPTED</span></td>

												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('template')}}/assets/img/user/user.jpg" alt="User Image"></a>
															<a href="profile.html">Instructor6 <span>instructor6@gmail.com</span></a>
														</h2>
													</td>
													<td>08 April 2020</td>
													<td class="text-center"><span class="accept">ACCEPTED</span></td>

												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('template')}}/assets/img/user/user.jpg" alt="User Image"></a>
															<a href="profile.html">Instructor7 <span>instructor7@gmail.com</span></a>
														</h2>
													</td>
													<td>08 April 2020</td>
													<td class="text-center"><span class="accept">ACCEPTED</span></td>

												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('template')}}/assets/img/user/user.jpg" alt="User Image"></a>
															<a href="profile.html">Instructor8 <span>instructor8@gmail.com</span></a>
														</h2>
													</td>
													<td>08 April 2020</td>
													<td class="text-center"><span class="reject">REJECTED</span></td>

												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>

						</div>
					</div>

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
	<!-- <script src="assets/js/circle-progress.min.js"></script> -->
	<!-- Custom JS -->
	<script src="{{ asset('template')}}/assets/js/script.js"></script>
	</body>

	<!-- Mirrored from mentoring-laravel.dreamguystech.com/public/dashboard-mentee by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:34:53 GMT -->

	</html>