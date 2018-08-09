<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container">
		<a class="navbar-brand" href="#">Title</a>
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="{{route('home')}}">Home</a>
			</li>
			<li>
				<a href="{{route('about')}}">About</a>
			</li>
			<li>
				<a href="{{route('contact')}}">Contact</a>
			</li>
			<li>
				<a href="{{route('login')}}">Login</a>
			</li>

			<li>
				<a href="{{route('register')}}">Register</a>
			</li>
		</ul>
	</div>
</nav>

<!-- Các view thành phần sẽ load ở đây -->

<div class="container">
	@yield('content')
</div>


<!-- Latest compiled and minified CSS & JS -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>