<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Adrian || Recover Password</title>
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
	<div class="container-login100">
		<div class="wrap-login101">

			<form class="login100-form validate-form" method="post" action="{{ route('password-recovery') }}">
					<span class="login100-form-logo">
						<img alt="" src="{{ asset('assets/images/loading.png') }}">
					</span>
				<span class="login100-form-title p-b-34 p-t-27">
				Enter Employee Number Recover Password
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
							<label for="email_address" style="color:#FFFFFF;">Employee Number</label>
							<input style="color:#FFFFFF;" id="text" type="text" class="form-line{{ $errors->has('employee_no') ? ' is-invalid' : '' }}" placeholder="ADE0000" name="employee_no" value="{{ old('employee_no') }}" required autofocus>
							@if ($errors->has('employee_no'))
							<span class="help-block">
								<strong>{{ $errors->first('employee_no') }}</strong>
							</span>
							@endif
						</div>
					</div>

					


				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Send Recovery Code To My Phone
					</button>
				</div>

				<div class="text-center p-t-50">
					<p class="txt1">
						Contact Administrator if you require assistance
					</p>
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
