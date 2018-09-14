<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel - @yield("title")</title>

		<!-- CSS -->
		<link  type="text/css" rel="stylesheet" href="css/bootstrap.css">
		<link  type="text/css" rel="stylesheet" href="css/fontawesome.css">
		<link  type="text/css" rel="stylesheet" href="css/app.css">
	</head>
	<body>
		@yield("content")
	</body>
</html>