@extends ('home.user')

@section ('content')
<script>
	$(document).ready(function(){
		$("#DataPribadi").toggle(true);
		$("#DataIzinUsahaTerpadu").toggle(false);
		$("#DataLain").toggle(false);
		
		$("#DataPribadiButton").click(function(){
			$("#DataPribadi").toggle();
			if (!$("#DataIzinUsahaTerpadu").is(":hidden")) {
				$("#DataIzinUsahaTerpadu").toggle();
			}
			if (!$("#DataLain").is(":hidden")) {
				$("#DataLain").toggle();
			}
		});
		
		$("#DataIzinUsahaTerpaduButton").click(function(){
			$("#DataIzinUsahaTerpadu").toggle();
			if (!$("#DataPribadi").is(":hidden")) {
				$("#DataPribadi").toggle();
			}
			if (!$("#DataLain").is(":hidden")) {
				$("#DataLain").toggle();
			}
		});
		
		
		$("#DataLainButton").click(function(){
			$("#DataLain").toggle();
			if (!$("#DataPribadi").is(":hidden")) {
				$("#DataPribadi").toggle();
			}
			if (!$("#DataIzinUsahaTerpadu").is(":hidden")) {
				$("#DataIzinUsahaTerpadu").toggle();
			}
		});
    });
</script>

	<div class ="container-fluid">
		<div class ="row">
			<div class ="col-md-2">
				<ul class="nav nav-pills nav nav-stacked">
				  <li><a href="{{ url('/izin/IzinUsahaTokoModern') }}">Izin Usaha Toko Modern</a></li>
				  <li><a href="{{ url('/izin/IzinUsahaPusatPerbelanjaan') }}">Izin Usaha Pusat Perbelanjaan</a></li>
				  <li><a href="{{ url('/izin/IzinUsahaPasarTradisional') }}">Izin Pengelolaan Pasar Tradisional</a></li>
				  <li><a href="{{ url('/izin/IzinTempatPenjualanMinumanBeralkohol') }}">Izin Tempat Penjualan Minuman Beralkohol</a></li>
				  <li class ="active"><a href="{{ url('/izin/TandaPendaftaranWaralaba') }}">Izin Tanda Pendaftaran Waralaba</a></li>
				</ul>
			</div>
			
			<div class = "container-fluid">
				<h2> <p class ="text-center"><span class="label label-primary">Form Izin Tanda Pendaftaran Waralaba</span> </p> </h2>
				<form role ="form" method ="post" enctype="multipart/form-data">
					<div class ="form-group">
						<button class="btn btn-default dropdown-toggle" id ="DataPribadiButton" type="button" data-toggle="dropdown">  <b>Data Pribadi</b> <span class="caret"></span></button>
						<button class="btn btn-default dropdown-toggle" id ="DataIzinUsahaTerpaduButton" type="button" data-toggle="dropdown">  <b>Data Izin Usaha Terpadu</b> <span class="caret"></span></button>
						<button class="btn btn-default dropdown-toggle" id ="DataLainButton" type="button" data-toggle="dropdown">  <b>Data Lainnya</b> <span class="caret"></span></button>
					</div>
					
					<div class ="form-group" id ="DataPribadi">
						<div class ="col-md-4">
							<label for="KTP">Fotokopi KTP Pimpinan</label>
							<input type="file" id="KTPFile" name="KTPFile">
						</div>
					</div>
					
					<div id ="DataIzinUsahaTerpadu" class ="form-group">
						<div class ="col-md-4">
							<label for="TandaDaftarPerusahaan">Fotokopi Tanda Daftar Perusahaan</label>
							<input type="file" id="TandaDaftarPerusahaanFile" name ="TandaDaftarPerusahaanFile">
						</div>
							
						<div class ="col-md-4">
							<label for="AktaPendirian">Fotokopi Akta Pendirian Perusahaan</label>
							<input type="file" id="AktaPendirianFile" name ="AktaPendirianFile">
						</div>
					</div>
					
					<div id ="DataLain" class ="form-group">
						<div class ="col-md-5">
							<label for "IzinTeknis">Fotokopi Izin Teknis</label>
							<input type="file" id="IzinTeknisFile" name ="IzinTeknisFile">
							<label for "ProspektusPenawaranWaralaba">Fotokopi Prospektus Penawaran Waralaba</label>
							<input type="file" id="ProspektusPenawaranWaralabaFile" name ="ProspektusPenawaranWaralabaFile">
						</div>
						
						<div class ="col-md-5">
							<label for "PerjanjianWaralaba">Fotokopi Perjanjian Waralaba</label>
							<input type="file" id="PerjanjianWaralabaFile" name ="PerjanjianWaralabaFile">
							<label for "HAKI">Fotokopi Tanda Bukti Pendaftaran Hak Kekayaan Intelektual</label>
							<input type="file" id="HAKIFile" name ="HAKIFile">
						</div>
						
						<div class ="col-md-5">
							<label for "STPW">Fotokopi Surat Tanda Pendaftaran Waralaba Pemberi Waralaba</label>
							<input type="file" id="STPWFile" name ="STPWFile">
						</div>
					</div>
					<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
					<button type="submit" class="btn btn-default">Daftar</button>
				</form>
			</div>
		</div>
	</div>
@endsection