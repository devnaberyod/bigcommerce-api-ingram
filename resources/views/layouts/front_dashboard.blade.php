<html>
<head>
	<meta charset="UTF-8">
	<title>Ingram Micro @yield('title')</title>

	<link rel="stylesheet" href="{{ elixir("build/css/vendor.css") }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"><!-- ADD THIS TO LOCAL --> 	
	<link rel="stylesheet" href="{{ elixir("css/dashboard.css") }}">
</head>
<body ng-app="app-ingram">
	<div class="sidebar">
		<div class="profile">
			<img src="{{ URL::asset('images/im-dashboard-logo.png') }}" class="img-responsive" />
		</div>
		<ul>
			<li>
				<a href="{{ url('/dashboard') }}"><i class="icon ion-ios-speedometer-outline"></i>Dashboard</a>
			</li>
			<li>
				<a href="{{ url('/store-management') }}"><i class="icon ion-ios-list-outline"></i>Store Management</a>
			</li>
			<li>
				<a href="{{ url('/settings') }}"><i class="icon ion-ios-gear-outline"></i>Settings</a>
			</li>
			<li>
				<a href="#"><i class="icon ion-ios-person-outline"></i>Account</a>
				<ul>
					<li><a href="#">Profile</a></li>
					<li><a href="{{ url('auth/logout') }}">Logout</a></li>
				</ul>
			</li>
		</ul>
		<ul>
	</div>

	<div class="board" ng-controller="ProductController as product">
		@section('content')
		   This is the master sidebar.
		@show
	</div>

	<script src="{{ elixir("build/js/vendor.js") }}"></script>
	<script src="{{ elixir("build/js/common.js") }}"></script>
	<script src="{{ elixir("js/all.js") }}"></script>
</body>
</html>