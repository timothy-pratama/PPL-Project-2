@extends ('home.app')

@section ('content')
	<div class ="container-fluid">
		<div class ="row">
			<div class ="col-md-2">
				<ul class="nav nav-pills nav nav-stacked">
				  <li><a href="{{ url('/izin/IzinUsahaTokoModern') }}">Izin Usaha Toko Modern</a></li>
				  <li><a href="{{ url('/izin/IzinUsahaPusatPerbelanjaan') }}">Izin Usaha Pusat Perbelanjaan</a></li>
				  <li><a href="{{ url('/izin/IzinUsahaPasarTradisional') }}">Izin Pengelolaan Pasar Tradisional</a></li>
				  <li class ="active"><a href="{{ url('/izin/IzinTempatPenjualanMinumanBeralkohol') }}">Izin Tempat Penjualan Minuman Beralkohol</a></li>
				  <li><a href="{{ url('/izin/TandaPendaftaranWaralaba') }}">Izin Tanda Pendaftaran Waralaba</a></li>
				</ul>
			</div>
		</div>
	</div>
@endsection