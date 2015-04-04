@extends ('home.app')

@section ('content')
<script>
	$(document).ready(function(){
		$("#DataPribadi").toggle(true);
		$("#DataIzinUsahaTerpadu").toggle(false);
		$("#DataIzinMendirikanBangunan").toggle(false);
		$("#DataPajak").toggle(false);
		$("#DataLain").toggle(false);
		
		$("#DataPribadiButton").click(function(){
			$("#DataPribadi").toggle();
			if (!$("#DataIzinUsahaTerpadu").is(":hidden")) {
				$("#DataIzinUsahaTerpadu").toggle();
			}
			if (!$("#DataIzinMendirikanBangunan").is(":hidden")) {
				$("#DataIzinMendirikanBangunan").toggle();
			}
			if (!$("#DataPajak").is(":hidden")) {
				$("#DataPajak").toggle();
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
			if (!$("#DataIzinMendirikanBangunan").is(":hidden")) {
				$("#DataIzinMendirikanBangunan").toggle();
			}
			if (!$("#DataPajak").is(":hidden")) {
				$("#DataPajak").toggle();
			}
			if (!$("#DataLain").is(":hidden")) {
				$("#DataLain").toggle();
			}
		});
		
		$("#DataIzinMendirikanBangunanButton").click(function(){
			$("#DataIzinMendirikanBangunan").toggle();
			if (!$("#DataPribadi").is(":hidden")) {
				$("#DataPribadi").toggle();
			}
			if (!$("#DataIzinUsahaTerpadu").is(":hidden")) {
				$("#DataIzinUsahaTerpadu").toggle();
			}
			if (!$("#DataPajak").is(":hidden")) {
				$("#DataPajak").toggle();
			}
			if (!$("#DataLain").is(":hidden")) {
				$("#DataLain").toggle();
			}
		});
		
		$("#DataPajakButton").click(function(){
			$("#DataPajak").toggle();
			if (!$("#DataPribadi").is(":hidden")) {
				$("#DataPribadi").toggle();
			}
			if (!$("#DataIzinUsahaTerpadu").is(":hidden")) {
				$("#DataIzinUsahaTerpadu").toggle();
			}
			if (!$("#DataIzinMendirikanBangunan").is(":hidden")) {
				$("#DataIzinMendirikanBangunan").toggle();
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
			if (!$("#DataIzinMendirikanBangunan").is(":hidden")) {
				$("#DataIzinMendirikanBangunan").toggle();
			}
			if (!$("#DataPajak").is(":hidden")) {
				$("#DataPajak").toggle();
			}
		});
    });
</script>

	<div class ="container-fluid">
		<div class ="row">
			<div class ="col-md-2">
				<ul class="nav nav-pills nav nav-stacked">
				  <li><a href="{{ url('/izin/IzinUsahaTokoModern') }}">Izin Usaha Toko Modern</a></li>
				  <li class ="active"><a href="{{ url('/izin/IzinUsahaPusatPerbelanjaan') }}">Izin Usaha Pusat Perbelanjaan</a></li>
				  <li><a href="{{ url('/izin/IzinUsahaPasarTradisional') }}">Izin Pengelolaan Pasar Tradisional</a></li>
				  <li><a href="{{ url('/izin/IzinTempatPenjualanMinumanBeralkohol') }}">Izin Tempat Penjualan Minuman Beralkohol</a></li>
				  <li><a href="{{ url('/izin/TandaPendaftaranWaralaba') }}">Izin Tanda Pendaftaran Waralaba</a></li>
				</ul>
			</div>
			
			<div class = "container-fluid">
				<h2> <p class ="text-center"><span class="label label-primary">Form Izin Usaha Pusat Perbelanjaan </span> </p> </h2>
				<form role ="form">
					<div class ="form-group">
						<button class="btn btn-default dropdown-toggle" id ="DataPribadiButton" type="button" data-toggle="dropdown">  <b>Data Pribadi</b> <span class="caret"></span></button>
						<button class="btn btn-default dropdown-toggle" id ="DataIzinUsahaTerpaduButton" type="button" data-toggle="dropdown">  <b>Data Izin Usaha Terpadu</b> <span class="caret"></span></button>
						<button class="btn btn-default dropdown-toggle" id ="DataIzinMendirikanBangunanButton" type="button" data-toggle="dropdown">  <b>Data Izin Mendirikan Bangunan</b> <span class="caret"></span></button>
						<button class="btn btn-default dropdown-toggle" id ="DataPajakButton" type="button" data-toggle="dropdown">  <b>Data Pajak</b> <span class="caret"></span></button>
						<button class="btn btn-default dropdown-toggle" id ="DataLainButton" type="button" data-toggle="dropdown">  <b>Data Lainnya</b> <span class="caret"></span></button>
					</div>
					
					<div class ="form-group" id ="DataPribadi">
						<div class ="col-md-4">
							<label for="KTP">Fotokopi KTP Pimpinan</label>
							<input type="file" id="KTPFile">
						</div>
						<div class ="col-md-4">
							<label for="Pasfoto">Pasfoto 3x4 Berwarna</label>
							<input type="file" id="PasfotoFile">
						</div>
					</div>
					
					<div id ="DataIzinUsahaTerpadu" class ="form-group">
						<div class ="col-md-4">
							<label for="SuratIzinGangguan">Fotokopi Surat Izin Gangguan</label>
							<input type="file" id="SuratIzinGangguanFile">
							<label for="SuratKepemilikanTempat">Fotokopi Surat Kepemilikan Tempat</label>
							<input type="file" id="SuratKepemilikanTempatFile">
						</div>
								
						<div class ="col-md-4">
							<label for="AktaPendirian">Fotokopi Akta Pendirian Perusahaan</label>
							<input type="file" id="AktaPendirianFile">
							<label for="PengesahanKehakiman">Fotokopi Pengesahan Kehakiman (untuk PT)</label>
							<input type="file" id="PengesahanKehakimanFile">
						</div>
							
						<div class ="col-md-4">
							<label for="DomisiliPerusahaan">Fotokopi Domisili Perusahaan</label>
							<input type="file" id="DomisiliPerusahaanFile">
							<label for="BKPM">Fotokopi Surat Izin BKPM</label>
							<input type="file" id="BKPMFile">
							<label for="NeracaModal">Neraca Modal Perusahaan</label>
							<input type="file" id="NeracaModalFile">
						</div>
					</div>
					
					<div id ="DataIzinMendirikanBangunan" class ="form-group">
						<div class ="col-md-4">
							<label for="IMB">Fotokopi Izin Mendirikan Bangunan</label>
							<input type="file" id="IMBFile">
						</div>
						<div class ="col-md-4">
							<label for="SuratKeteranganLokasi">Surat Keterangan Lokasi Objek Perizinan</label>
							<input type="file" id="SuratKeteranganLokasiFile">
						</div>
					</div>
					
					<div id ="DataPajak" class ="form-group">
						<div class ="col-md-4">
							<label for="NPWP">Fotokopi NPWP</label>
							<input type="file" id="NPWPFile">
						</div>
						
						<div class ="col-md-4">
							<label for="PBB">Fotokopi Bukti Pelunasan PBB</label>
							<input type="file" id="PBBFile">
						</div>
					</div>
					
					<div id ="DataLain" class ="form-group">
						<div class ="col-md-5">
							<label for="AnalisaDampak">Analisa Dampak terhadap Lalulintas, Lingkungan, Sosial, dan Ekonomi</label>
							<input type="file" id="AnalisaDampakFile">
							<label for="RencanaKemitraan">Rencana Kemitraan dengan Usaha Mikro, Kecil, dan Menengah(UKM)</label>
							<input type="file" id="RencanaKemitraanFile">
						</div>
						
						<div class ="col-md-5">
							<label for="SuratPernyataanKebenaran">Surat Pernyataan Kebenaran Dokumen Persyaratan</label>
							<input type="file" id="SuratPernyataanKebenaranFile">
							<br>
						</div>
					</div>
					<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
					<button type="submit" class="btn btn-default">Daftar</button>
				</form>
			</div>
		</div>
	</div>
@endsection