<html>
<head>
	<meta charset="UTF-8">
	<title>Ingram Micro -  @yield('title')</title>
	<link rel="stylesheet" href="{{ elixir("build/css/vendor.css") }}">
	<link rel="stylesheet" href="{{ elixir("css/home.css") }}">
</head>
<body>
	<div class="home-wrapper">
		<header>
			<div class="container">
				<div class="logo"><img src="{{ URL::asset('images/im-logo.png') }}"></strong></div>
				<div class="login"><button class="alt">Log in</button></div>
				<div class="logout hidden"><button class="alt">Log out</button></div>
			</div>
		</header>
		<banner>
			<div class="container">
				<aside>
					<h1>Track, manage, & organize <br>
					your E-Commerce store.</h1>

					<h3><strong>Process flexibility</strong> & <strong>optimum performance</strong> to your business.</h3>
				</aside>

				<!-- Sign up form -->
				<div class="form-container signup-form">
					<h3>Register</h3>
					<form class="frm-signup" method="POST" action="{{ url('auth/register') }}">
					 	{!! csrf_field() !!}
						<div class="form-field wide">
							<input name="name" type="text" placeholder="Name" value="{{ old('name') }}">
							@if ($errors->has('name'))
							    <span class="help-block">
							        <strong>{{ $errors->first('name') }}</strong>
							    </span>
							@endif
						</div>
						<div class="form-field wide">
							<input name="email" type="email" placeholder="Email" value="{{ old('email') }}">
							@if ($errors->has('email'))
							    <span class="help-block">
							        <strong>{{ $errors->first('email') }}</strong>
							    </span>
							@endif
						</div>
						<div class="form-field wide">
							<input name="password" type="password" placeholder="Password">
							@if ($errors->has('password'))
							    <span class="help-block">
							        <strong>{{ $errors->first('password') }}</strong>
							    </span>
							@endif
						</div>
						<div class="form-field wide">
							<input name="password_confirmation" type="password" placeholder="Repeat Password">
							@if ($errors->has('password_confirmation'))
							    <span class="help-block">
							        <strong>{{ $errors->first('password_confirmation') }}</strong>
							    </span>
							@endif
						</div>
						<div class="form-field wide">
							<input type="submit" value="Sign Up">
						</div>
					</form>
				</div>

				<!-- Log in form -->
				<div class="form-container login-form hidden">
					<h3>Log in</h3>
					<div class="alert alert-danger" style="display:none" id="login-error">Invalid Username/Password</div>
					<form class="frm-login" method="POST" action="{{ url('auth/login') }}">
						{!! csrf_field() !!}
						<div class="form-field wide">
							<input type="email" placeholder="Email" name="email">
						</div>
						<div class="form-field wide">
							<input type="password" placeholder="Password" name="password">
						</div>
						<div class="form-field wide"><input class="submit-login" type="submit" value="Sign in"></div>
					</form>
					<p class="text-center">Not a member yet? <a class="sign-up-btn">Sign up</a>.</p>
				</div>
			</div>
		</banner>
		<footer>
			<div class="container">
				<p>© 2016 Cleverlocal. All rights reserved.</p>
			</div>
		</footer>
	</div>
	<script src="{{ elixir("build/js/vendor.js") }}"></script>
	<script src="{{ elixir("build/js/common.js") }}"></script>
</body>
</html>