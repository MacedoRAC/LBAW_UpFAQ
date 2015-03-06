<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<!-- Bootstrap CSS -->
			<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
			<link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
			<!-- Other CSS files -->
			<link href="{{ asset('css/style.css') }}" rel="stylesheet">
			<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
		
		<link rel = "shortcut icon" href = "{{ asset('img/favicon.ico') }}">
		<title>UpFAQ</title>
	</head>
	<body>
		<!-- NAVBAR -->
		@include('layouts.navbar_unlogged')
		<!-- NAVBAR END -->

		<!-- PAGE CONTENT -->
		@yield('content')
		<!-- PAGE CONTENT END -->
	</body>
	<footer>
		<!-- PAGE FOOTER -->
		@include('layouts.footer')
		<!-- PAGE FOOTER END-->

		<!-- JQuery -->
		<script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/npm.js') }}"></script>

		<!-- SCRIPT -->
		<script src="{{ asset('js/script.js') }}"></script>
	</footer>
</html>