<?php
    use Illuminate\Support\Facades\Session;
    $jenis = 'all';
    $stats = 'user';
    $login_local = 'http://dukcapil.pplbandung.biz.tm/oauth/authorize?client_id=ulP9hlsW74ahy2ND&redirect_uri=http://localhost:8000/login_callback&response_type=code';
?>

@extends ('home.headerlogin')

@section ('content')
		<h3><center>Selamat datang di dalam Aplikasi Izin Usaha dan Sarana Perdagangan</center></h3>
		<h4><center>Anda dapat mendaftarkan izin usaha Anda di sini dengan cepat dan mudah</center></h4>
		<h4><center style="margin-top: 2%"><a href="{{$login_local}}" ><span style="padding: 1%" class="label label-info">Silakan Login Terlebih Dahulu</span></a></center></h4>
	</div>
@endsection