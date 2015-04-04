<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bandung BerUsaha</title>

	<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/bootstrap-theme.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/bootstrap-theme.min.css') }}" rel="stylesheet">
	
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<div class ="row">
			<div class ="col-md-1"> <?php echo "<img src=".asset("/img/logo.png"); ?> width ="90" height = "90"> </div>
			<div class ="col-md-10"> <a href ="{{ url('/Admin/izin') }}"> <h1><p class="text-center">Aplikasi Izin Usaha dan Sarana Perdagangan</p> </h1> </a></div>
			<div class ="col-md-1"> <?php echo "<img src=".asset("/img/logo2.png"); ?> width ="90" height = "90"> </div>
		</div>
		<div class ="row">
			<div class ="col-md-6 col-md-offset-3"> <h4> <p class="text-center">Ini adalah Panel Admin</p></h4></div>
		</div>
	  </div>
	</nav>
	
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
