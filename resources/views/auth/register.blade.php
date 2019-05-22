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
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
					<span class="login100-form-logo">
						<img alt="" src="assets/images/loading.png">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Registration
					</span>
					<div class="row">
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter username">
								<input class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus type="text" name="name" id="name" placeholder="Username">
								<i class="material-icons focus-input1001">person</i>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter email">
								<input class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required type="email" name="email" placeholder="Email">
								<i class="material-icons focus-input1001">person</i>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
                        </div>
                        <input type="hidden" name="user_type" id="user_type" value="EMPLOYEE">

						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter password">
								<input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required type="password" placeholder="Password">
								<i class="material-icons focus-input1001">person</i>
							</div>
						</div>

						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter password again">
								<input id="password-confirm" name="password_confirmation" required class="input100" type="password" placeholder="Confirm password">
								<i class="material-icons focus-input1001">person</i>
							</div>
						</div>
					</div>
					
					<div class="contact100-form-checkbox">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" value=""> Remember me
								<span class="form-check-sign">
									<span class="check"></span>
								</span>
							</label>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Sign Up
						</button>
					</div>
					<div class="text-center p-t-50">
						<a class="txt1" href="sign-in.html">
							You already have a membership?
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
