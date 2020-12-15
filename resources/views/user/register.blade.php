<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mentoring-laravel.dreamguystech.com/public/register by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:34:54 GMT -->
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

<body class="account-page">

	<!-- Page Content -->
	<div class="bg-pattern-style bg-pattern-style-register">
		<div class="content">

			<!-- Register Content -->
			<div class="account-content">
				<div class="account-box">
					<div class="login-right">
						<div class="login-header">
							<h3><span>CareerLabs</span> Register</h3>
							<p class="text-muted">Access to our dashboard</p>
						</div>

						<!-- Register Form -->
						<form method="POST" action="{{ route('register') }}">
							@csrf


							<div class="form-group">
								<label for="name" class="form-control-label text-md-right">{{ __('Name') }}</label>
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
								@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>

							<div class="form-group">
								<label for="" class="form-control-label text-md-right">{{ __('Usertype') }}</label>
								<input id="usertype" type="text" class="form-control @error('usertype') is-invalid @enderror" name="usertype" value="{{ old('usertype') }}" required autocomplete="usertype" autofocus>
								@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>



							<div class="form-group">
								<label for="email" class="form-control-label text-md-right">{{ __('E-Mail Address') }}</label>
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>




							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="password" class="form-control-label text-md-right">{{ __('Password') }}</label>
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
										@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>


								<div class="col-lg-6">
									<div class="form-group">
										<label for="password-confirm" class="form-control-label text-md-right">{{ __('Confirm Password') }}</label>
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
									</div>
								</div>
							</div>



							<div class="form-group">
								<div class="custom-control custom-control-xs custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="agreeCheckboxUser" id="agree_checkbox_user">
									<label class="custom-control-label" for="agree_checkbox_user">I agree to clients</label> <a tabindex="-1" href="javascript:void(0);">Privacy Policy</a> &amp; <a tabindex="-1" href="javascript:void(0);"> Terms.</a>
								</div>
							</div>
							<button type="submit" class="btn btn-primary login-btn"> {{ __('Create Account') }}</button>
							<div class="account-footer text-center mt-3">
								Already have an account? <a class="forgot-link mb-0" href="{{ route('login') }}">{{ __('Login') }}</a>
							</div>
						</form>
						<!-- /Register Form -->


					</div>
				</div>
			</div>
			<!-- /Register Content -->

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

<!-- Mirrored from mentoring-laravel.dreamguystech.com/public/register by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 18:34:54 GMT -->

</html>