<!DOCTYPE html>
<html lang="en-us">
	<head>
		{{ HTML::style('css/main.css'); }}
		<meta charset="utf-8">
		<title>@yield('title')</title>
	</head>
	<body>
		<div id="menu">
			<ul class="nav-menu">
				<li><a href="/home">Home</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/services">Services</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</div>
		@yield('content')
	</body>


</html>