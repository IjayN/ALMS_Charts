<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Adrian || Login</title>
	<!-- Favicon-->
	<link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">

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


							<form method="POST" action="{{ route('authenticate') }}" class="login100-form validate-form">
								<span class="login100-form-logo">
									<img alt="" src="{{ asset('assets/images/loading.png') }}">
								</span>
								<span class="login100-form-title p-b-34 p-t-27">
								Adrian Leave Application Portal
								</span>
								{{ csrf_field() }}

								@if(Session::has('danger'))
									<p class="alert alert-danger">{{ Session::get('danger') }}
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</p>
								@endif

									<div class="wrap-input100 validate-input{{ $errors->has('employee_no') ? ' has-error' : '' }}">
									<div class="">
										<label for="employee_no" style="color:#FFFFFF;">Employee Number</label>
										<input style="color:#FFFFFF;" id="text" type="text" class="form-line{{ $errors->has('employee_no') ? ' is-invalid' : '' }}" placeholder="ADE00000" name="employee_no" value="{{ old('email') }}" required autofocus>
										@if ($errors->has('employee_no'))
										<span class="help-block">
											<strong>{{ $errors->first('employee_no') }}</strong>
										</span>
										@endif
									</div>
								</div>
								
								<div class="wrap-input100 validate-input{{ $errors->has('password') ? ' has-error' : '' }}">
									<div class="">
										<label for="password" style="color:#FFFFFF;">Password</label>
										<input style="color:#FFFFFF;" id="password" type="password" class="form-line" placeholder="******" name="password" required>
										@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
										@endif
									</div>
								</div>


								<div class="container-login100-form-btn">
									<button type="submit" class="login100-form-btn">
										<i class="batch-icon batch-icon-key"></i>
										Sign In
									</button>
								</div>
								<hr>

								<div class="text-center p-t-50">
									<a class="txt1" href="{{ route('recover-password') }}">
										Forgot Your Password?
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
