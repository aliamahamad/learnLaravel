<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

</head>
<body>
	@if(session('status'))
	<div class="alert alert-success fade-out col-lg-8 col-lg-offset-2">
		{{ session('status') }}
	</div>
	@endif
	@yield('content')

	<!-- Scripts -->
	<script src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>


</body>
</html>