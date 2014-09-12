<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
	</head>
	<body>
		<ul>
			<li><a href="/home">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/services">Services</a></li>
			<li><a href="/contact">Contact</a></li>
		</ul>
		@yield('content')
	</body>
</html>