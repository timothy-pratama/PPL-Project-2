<?php $jenis = 'all';?>
<?php $stats = 'user';?>

@extends ('home.header')

@section ('content')
	<div class ="container-fluid">
		<div class ="row">
			@include ('home.sidebar')
			
			<div class ="container-fluid">
				<h3> <p class ="text-center">Selamat datang di dalam Aplikasi Izin Usaha dan Sarana Perdagangan</p> </h3>		
				<br><br>
				<h4> <p class ="text-center">Anda dapat mendaftarkan izin usaha Anda di sini dengan cepat dan mudah</p> </h4>
				<br><br>
				<h4> <p class ="text-center"> <span class="label label-info">Anda dapat memilih izin yang anda ingin ajukan pada menu bagian kiri</span></p> </h4>
			</div>
		</div>
	</div>
@endsection