<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

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
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="{{ asset('template')}}/assets/css/style.css">
</head>

<body class="account-page">

	<!-- Page Content -->
	<div class="bg-pattern-style">
		<div class="content">

			<!-- Login Tab Content -->
			<div class="account-content">
				<div class="account-box">
					<div class="login-right">
						<div class="login-header">
							<h3>Login <span>CareerLabs</span></h3>
							<p class="text-muted">Access to our dashboard</p>
						</div>
						<form method="POST" action="{{ route('login') }}">
							@csrf


							<div class=" form-group">
								<label for="email" class=" text-md-right form-control-label">{{ __('E-Mail Address') }}</label>

								<div class="">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>

							<div class=" form-group">
								<label for="password" class=" text-md-right form-control-label">{{ __('Password') }}</label>

								<div class=" pass-group">
									<input id="password" type="password" class="form-control pass-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="form-group ">
								<div class="">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

										<label class="form-check-label" for="remember">
											{{ __('Remember Me') }}
										</label>
									</div>
								</div>
							</div>


							<div class="text-right">
								@if (Route::has('password.request'))
								<a class="forgot-link" href="{{ route('password.request') }}">
									{{ __('Forgot Your Password?') }}
								</a>
								@endif
							</div>
							<button type="submit" class="btn btn-primary login-btn">
								{{ __('Login') }}
							</button>



							<div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">{{ __('Register') }}</a></div>



						</form>
					</div>
				</div>
			</div>
			<!-- /Login Tab Content -->

		</div>

	</div>
	<!-- /Page Content -->
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

<!-- Mirrored from mentoring-laravel.dreamguystech.com/public/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:34:54 GMT -->

</html>