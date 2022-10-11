<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.panel.header')
</head>
<body>
   	<!-- Wrapper -->
	<div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
		@include('partials.panel.navbar')
		@include('partials.panel.sidebar')

		<!-- Main Content -->
		<div class="hk-pg-wrapper">
			@yield('content')
		</div>
		<!-- /Main Content -->
	</div>
    <!-- /Wrapper -->

	@include('partials.panel.footer')
</body>
</html>