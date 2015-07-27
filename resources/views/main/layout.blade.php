<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Social Board @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}">
	<link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>
	{{-- Pre-loaded Scripts --}}
	@include('partials.pre-scripts')
	
	{{-- Navbar Section --}}
	@yield('nav')

	{{-- Form Errors --}}
	@include('partials.flash')
	
	{{-- Main Content --}}
	@yield('content')
	
	{{-- Post-loaded scripts --}}
	@include('partials.post-scripts')

</body>
</html>