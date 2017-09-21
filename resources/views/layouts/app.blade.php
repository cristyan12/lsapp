<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name', 'LSAPP') }}</title>
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@yield('content')
	</div>
</body>
</html>