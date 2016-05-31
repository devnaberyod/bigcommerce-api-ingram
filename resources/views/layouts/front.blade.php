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
					<form action="">
						<div class="form-field">
							<input type="text" placeholder="First Name">
						</div>
						<div class="form-field">
							<input type="text" placeholder="Last Name">
						</div>
						<div class="form-field wide">
							<input type="text" placeholder="Email">
						</div>
						<div class="form-field">
							<input type="text" placeholder="Company">
						</div>
						<div class="form-field">
							<input type="text" placeholder="Job Title">
						</div>
						<div class="form-field">
							<input type="text" placeholder="Phone">
						</div>
						<div class="form-field">
							<input type="text" placeholder="Address">
						</div>
						<div class="form-field">
							<input type="text" placeholder="State">
						</div>
						<div class="form-field">
							<input type="text" placeholder="Post Code">
						</div>
						<div class="form-field wide">
							<input type="submit" value="Sign Up">
						</div>
					</form>
				</div>

				<!-- Log in form -->
				<div class="form-container login-form hidden">
					<h3>Log in</h3>
					<form action="">
						<div class="form-field wide">
							<input type="text" placeholder="Username">
						</div>
						<div class="form-field wide">
							<input type="text" placeholder="Password">
						</div>
						<div class="form-field wide"><input type="submit" value="Sign in"></div>
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