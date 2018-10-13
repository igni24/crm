<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel - @yield("title")</title>

		<!-- CSS -->
		<link  type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
		<link  type="text/css" rel="stylesheet" href="css/fontawesome.css">
		<link  type="text/css" rel="stylesheet" href="css/app.css">

		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/utils.js"></script>
	</head>
	<body id="@yield("idPage")">
		<header>
			@include("layouts.navbar")
		</header>

		<main>
			@yield("content")
		</main>

		<footer>
		</footer>
	</body>
</html>