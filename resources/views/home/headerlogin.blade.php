<?php
$name = 'izinusahasaranaperdagangan';
$redirect_uri = 'http://usahasarana.pplbandung.biz.tm/login_callback';
$client_id = 'rcQHD0QUT8xxg8Aj';
$client_secret = 'LRWXgkS867lPcs26';
$login = 'http://dukcapil.pplbandung.biz.tm/oauth/authorize?client_id=rcQHD0QUT8xxg8Aj&redirect_uri=http://usahasarana.pplbandung.biz.tm/login_callback&response_type=code';

//test ke localhost
$name_local = 'saranaperdaganganlocalhost';
$client_id_local = 'ulP9hlsW74ahy2ND';
$redirect_uri_local = 'http://localhost:8000/login_callback';
$client_secret_local = 'JDPqeCpwEFUY6F4Q';
$login_local = 'http://dukcapil.pplbandung.biz.tm/oauth/authorize?client_id=ulP9hlsW74ahy2ND&redirect_uri=http://localhost:8000/login_callback&response_type=code';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bandung BerUsaha</title>

	<link href="{{ asset('/css/user/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/user/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/user/css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/user/css/style.css') }}" rel="stylesheet">
	<!--<link href="{{ asset('/css/style-responsive.css') }}" rel="stylesheet">-->

	<link rel='stylesheet' type='text/css' href='assets/js/gritter/css/jquery.gritter.css' />
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a href="{{Route('login')}}" class="brand">Bandung Berusaha</
				<div class="nav-collapse">
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-cog"></i>
								Account
								<b class="caret"></b>
							</a>

							<ul class="dropdown-menu">
								<li><a href="{{$login_local}}">Login</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-search pull-right">
						<input class="search-query" placeholder="Search" type="text">
					</form>
				</div><!--/.nav-collapse -->
			</div>
		</div> <!-- /navbar-inner -->
	</div> <!-- /navbar -->

	<div class="subnavbar">
		<div class="subnavbar-inner">
			<div class="container">

			</div> <!-- /container -->
		</div> <!-- /subnavbar-inner -->
	</div> <!-- /subnavbar -->

	<div class="main" id = "content">
		<div class="main-inner">
			<div class="container">
		@yield('content')
			</div>
		</div>
	</div>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/user/js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/user/js/base.js') }}"></script>
	<script src="{{ asset('js/user/js/jquery-1.7.2.min.js') }}"></script>
	<script src="{{ asset('js/user/js/faq.js') }}"></script>
</body>
</html>