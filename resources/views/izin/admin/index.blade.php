@extends ('home.admin')

@section ('content')
	<div class ="container-fluid">
		<div class ="row">
			<div class ="col-md-2">
				<ul class="nav nav-pills nav nav-stacked">
				  <li><a href="{{ url('/Admin/izin/IzinUsahaTokoModern') }}">Izin Usaha Toko Modern</a></li>
				  <li><a href="{{ url('/Admin/izin/IzinUsahaPusatPerbelanjaan') }}">Izin Usaha Pusat Perbelanjaan</a></li>
				  <li><a href="{{ url('/Admin/izin/IzinUsahaPasarTradisional') }}">Izin Pengelolaan Pasar Tradisional</a></li>
				  <li><a href="{{ url('/Admin/izin/IzinTempatPenjualanMinumanBeralkohol') }}">Izin Tempat Penjualan Minuman Beralkohol</a></li>
				  <li><a href="{{ url('/Admin/izin/TandaPendaftaranWaralaba') }}">Izin Tanda Pendaftaran Waralaba</a></li>
				</ul>
			</div>
			
			<div class ="container-fluid">
				<h3> <p class ="text-center">Selamat datang di dalam Aplikasi Izin Usaha dan Sarana Perdagangan</p> </h3>		
				<br><br>
				<h4> <p class ="text-center">Anda sebagai Admin dapat melakukan perubahan status dari izin yang telah diajukan</p> </h4>
				<br><br>
				<h4> <p class ="text-center"> <span class="label label-info">Anda dapat memilih izin yang anda ingin setujui pada menu bagian kiri</span></p> </h4>
			</div>
		</div>
	</div>
@endsection