<!-- LAYOUT BLADE HTML CONFIG -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<!-- meta -->

		<meta charset="utf-8">

			<!-- CSRF Token -->

		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- title -->

		<title>@yield('title')</title>

		<!-- scripts -->

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

		<!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

		<!-- styles -->

		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">

		<!-- favicon -->

		{{-- <link rel="shortcut icon" href="{{ asset('/public/favicon.jpg') }}"> --}}
	</head>

	<!-- body -->

	<body class="@yield('name')" onload="set_style_from_cookie()">

		<!-- header -->

		@include('layouts.navbar')

		<!-- content -->

			@yield('main_content')


		<!-- footer -->

    {{-- @include('layout.footer') --}}

	<!-- script -->
					<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	</body>
</html>
