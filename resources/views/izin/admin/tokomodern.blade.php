@extends ('home.admin')

@section ('content')

	<div class ="container-fluid">
		<div class ="row">
			<div class ="col-md-2">
				<ul class="nav nav-pills nav nav-stacked">
				  <li class ="active"><a href="#">Izin Usaha Toko Modern</a></li>
				  <li><a href="{{ url('/Admin/izin/IzinUsahaPusatPerbelanjaan') }}">Izin Usaha Pusat Perbelanjaan</a></li>
				  <li><a href="{{ url('/Admin/izin/IzinUsahaPasarTradisional') }}">Izin Pengelolaan Pasar Tradisional</a></li>
				  <li><a href="{{ url('/Admin/izin/IzinTempatPenjualanMinumanBeralkohol') }}">Izin Tempat Penjualan Minuman Beralkohol</a></li>
				  <li><a href="{{ url('/Admin/izin/TandaPendaftaranWaralaba') }}">Izin Tanda Pendaftaran Waralaba</a></li>
				</ul>
			</div>
			
			@if ( !$izin->count() )
				Tidak ada izin usaha toko modern
			@else
				<ul>
					@foreach( $izin as $i )
						<li>{{ $i->id }}</li>
					@endforeach
				</ul>
			@endif
		</div>
	</div>
@endsection