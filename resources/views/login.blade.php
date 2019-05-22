<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Adrian || Login</title>
	<!-- Favicon-->
	<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

	<!-- Plugins Core Css -->
	<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">

	<!-- Custom Css -->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/pages/extra_pages.css') }}" rel="stylesheet" />
</head>

<body class="login-page">
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">

				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">

					<span class="login100-form-logo">
						<img alt="" src="{{ asset('assets/images/loading.png') }}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					  @csrf

					<div class="wrap-input100 validate-input" data-validate="Enter Email">
						<input class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" value="{{ old('email') }}" name="email" placeholder="Email">
						<i class="material-icons focus-input1001">mail</i>
						@if ($errors->has('email'))
								<span class="invalid-feedback">
										<strong>{{ $errors->first('email') }}</strong>
								</span>
						@endif
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="pass" placeholder="Password">
						<i class="material-icons focus-input1001">lock</i>
						@if ($errors->has('password'))
								<span class="invalid-feedback">
										<strong>{{ $errors->first('password') }}</strong>
								</span>
						@endif
					</div>
					<div class="contact100-form-checkbox">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox"  {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
								<span class="form-check-sign">
									<span class="check"></span>
								</span>
							</label>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
						  {{ __('Login') }}
						</button>
					</div>
					<div class="text-center p-t-50">
						<a class="txt1" href="{{ route('password.request') }}">
						{{ __('Forgot Your Password?') }}
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Plugins Js -->

	<script src="{{ asset('assets/js/app.min.js') }}"></script>

	<!-- Extra page Js -->
	<script src="{{ asset('assets/js/pages/examples/pages.js') }}"></script>

</body>


</html>
