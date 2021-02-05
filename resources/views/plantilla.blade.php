<html>
	<head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<title>
			@yield('titulo')
		</title>
	</head>
	<body>
        @include('partials.nav')
		@yield('contenido')
	</body>
</html>