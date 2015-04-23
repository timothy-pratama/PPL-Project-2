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
	<link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/styleuser.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/style-responsive.css') }}" rel="stylesheet">
	
	<link rel='stylesheet' type='text/css' href='assets/js/gritter/css/jquery.gritter.css' />
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<h4><a href="{{Route('userhome')}}">Bandung Berusaha</a></h4>
				<div class="nav-collapse">
					<ul class="nav pull-right">
						<li class="dropdown">						
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-cog"></i>
								Account
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="javascript:;">Settings</a></li>
								<li><a href="javascript:;">Help</a></li>
							</ul>						
						</li>
					</ul>
					<form class="navbar-search pull-right">
						<input type="text" class="search-query" placeholder="Search">
					</form>
				</div><!--/.nav-collapse -->	
			</div> <!-- /container -->
		</div> <!-- /navbar-inner -->
	</div> <!-- /navbar -->
	
	<div class="subnavbar">
		<div class="subnavbar-inner">
			<div class="container">
				<ul class="mainnav">
					<li <?php if ($jenis == 'IzinUsahaTokoModern') echo 'class = "active mt"';?> >
						<i class="icon-dashboard"></i>
						<a href="<?php if ($jenis == 'IzinUsahaTokoModern') echo '#'; 
						else { if ($stats == "admin") echo url('/Admin/izin/IzinUsahaTokoModern'); else if ($stats == "user") echo url('/izin/IzinUsahaTokoModern');}?>">Izin Usaha Toko Modern</a>
					</li>
					
					<li <?php if ($jenis == 'IzinUsahaPusatPerbelanjaan') echo 'class = "active"';?> >
					<i class="icon-list-alt"></i>
						<a href="<?php if ($jenis == 'IzinUsahaPusatPerbelanjaan') echo '#'; 
						else { if ($stats == "admin") echo url('/Admin/izin/IzinUsahaPusatPerbelanjaan'); else if ($stats == "user") echo url('/izin/IzinUsahaPusatPerbelanjaan');}?>">Izin Usaha Pusat Perbelanjaan</a>
					</li>
											
					<li <?php if ($jenis == 'IzinUsahaPasarTradisional') echo 'class = "active"';?> >
					<i class="icon-facetime-video"></i>
						<a href="<?php if ($jenis == 'IzinUsahaPasarTradisional') echo '#'; 
						else { if ($stats == "admin") echo url('/Admin/izin/IzinUsahaPasarTradisional'); else if ($stats == "user") echo url('/izin/IzinUsahaPasarTradisional');}?>">Izin Usaha Pasar Tradisional</a>
					</li>
									
					<li <?php if ($jenis == 'IzinTempatPenjualanMinumanBeralkohol') echo 'class = "active"';?> >
					<i class="icon-bar-chart"></i>
						<a href="<?php if ($jenis == 'IzinTempatPenjualanMinumanBeralkohol') echo '#'; 
						else { if ($stats == "admin") echo url('/Admin/izin/IzinTempatPenjualanMinumanBeralkohol'); else if ($stats == "user") echo url('/izin/IzinTempatPenjualanMinumanBeralkohol');}?>">Izin Tempat Penjualan Minuman Beralkohol</a>
					</li>
					
					<li <?php if ($jenis == 'TandaPendaftaranWaralaba') echo 'class = "active"';?> >
						<i class="icon-code"></i>
							<a href="<?php if ($jenis == 'TandaPendaftaranWaralaba') echo '#'; 
							else { if ($stats == "admin") echo url('/Admin/izin/TandaPendaftaranWaralaba'); else if ($stats == "user") echo url('/izin/TandaPendaftaranWaralaba');}?>">Izin Tanda Pendaftaran Waralaba</a>
						</li>
					</li>
				</ul>
			</div> <!-- /container -->		
		</div> <!-- /subnavbar-inner -->
	</div> <!-- /subnavbar -->
	<div class="row">
		@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>