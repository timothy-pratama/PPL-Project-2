<?php $jenis = 'IzinUsahaPasarTradisional';?>
<?php $stats = 'admin';?>

@extends ('home.header')

@section ('content')

	<div class ="container-fluid">
		<div class ="row">
			@include ('home.sidebar')
			
			@include ('izin.admin.listizin')
		</div>
	</div>
@endsection