<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>Game Events</title>
	    <link href="{{ URL::asset('web/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="{{ URL::asset('web/css/flexslider.css') }}" type="text/css" media="screen" property="" />
		<link href="{{ URL::asset('web/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />	
	    <script src="{{ URL::asset('web/js/jquery.min.js') }}"></script>
		<script src="{{ URL::asset('web/js/bootstrap.js') }}"></script>
	    @yield('css')
	</head>
  
    <body>
	  	@include('Layout.Web.Home.header')
	    @yield('content')  
	    @include('Layout.Web.Home.footer')
	    @yield('script')
  	</body>
</html>