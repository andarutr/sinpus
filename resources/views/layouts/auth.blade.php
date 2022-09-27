<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.auth.header')
</head>
<body class="home">


	<!-- loading -->
	<div id="loading"></div>
	<!-- end loading -->

	@include('partials.auth.navbar')
	
	@yield('content')
	
	@include('partials.auth.footer')
</body>
</html>