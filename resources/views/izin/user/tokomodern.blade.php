<?php $jenis = 'IzinUsahaTokoModern';?>
<?php $stats = 'user';?>

@extends ('home.headeruser')

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
	<div class="col-xs-2"></div>
	<div class="col-xs-10">
		<h2 class ="text-center"><span class="label label-primary">Form Izin Usaha Toko Modern</span></h2>
		<br><br>
		<form role ="form" method ="post" enctype="multipart/form-data" action="{{ url('izin/IzinUsahaTokoModern/store') }}">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class ="form-group">
				<button class="btn btn-default dropdown-toggle" id ="DataPribadiButton" type="button" data-toggle="dropdown">  <b>Data Pribadi</b> <span class="caret"></span></button>
				<button class="btn btn-default dropdown-toggle" id ="DataIzinUsahaTerpaduButton" type="button" data-toggle="dropdown">  <b>Data Izin Usaha Terpadu</b> <span class="caret"></span></button>
				<button class="btn btn-default dropdown-toggle" id ="DataIzinMendirikanBangunanButton" type="button" data-toggle="dropdown">  <b>Data Izin Mendirikan Bangunan</b> <span class="caret"></span></button>
				<button class="btn btn-default dropdown-toggle" id ="DataPajakButton" type="button" data-toggle="dropdown">  <b>Data Pajak</b> <span class="caret"></span></button>
				<button class="btn btn-default dropdown-toggle" id ="DataLainButton" type="button" data-toggle="dropdown">  <b>Data Lainnya</b> <span class="caret"></span></button>
			</div>
			
			<div class ="form-group" id ="DataPribadi">
			    @include('izin.user.formidentitas')
				<div class ="col-xs-4">
					<label for="KTP">Fotokopi KTP Pimpinan</label>
					<input type="file" id="KTPFile" name ="KTPFile" required>
				</div>
				<div class ="col-xs-4">
					<label for="Pasfoto">Pasfoto 3x4 Berwarna</label>
					<input type="file" id="PasfotoFile" name ="PasfotoFile" required>
				</div>
			</div>
			
			<div id ="DataIzinUsahaTerpadu" class ="form-group">
				<div class ="col-xs-4">
					<label for="SuratIzinGangguan">Fotokopi Surat Izin Gangguan</label>
					<input type="file" id="SuratIzinGangguanFile" name ="SuratIzinGangguanFile" required>
					<label for="SuratKepemilikanTempat">Fotokopi Surat Kepemilikan Tempat</label>
					<input type="file" id="SuratKepemilikanTempatFile" name ="SuratKepemilikanTempatFile" required>
				</div>
						
				<div class ="col-xs-4">
					<label for="AktaPendirian">Fotokopi Akta Pendirian Perusahaan</label>
					<input type="file" id="AktaPendirianFile" name ="AktaPendirianFile" required>
					<label for="PengesahanKehakiman">Fotokopi Pengesahan Kehakiman (untuk PT)</label>
					<input type="file" id="PengesahanKehakimanFile" name ="PengesahanKehakimanFile" required>
				</div>
					
				<div class ="col-xs-4">
					<label for="DomisiliPerusahaan">Fotokopi Domisili Perusahaan</label>
					<input type="file" id="DomisiliPerusahaanFile" name ="DomisiliPerusahaanFile" required>
					<label for="BKPM">Fotokopi Surat Izin BKPM</label>
					<input type="file" id="BKPMFile" name ="BKPMFile" required>
					<label for="NeracaModal">Neraca Modal Perusahaan</label>
					<input type="file" id="NeracaModalFile" name ="NeracaModalFile" required>
				</div>
			</div>
			
			<div id ="DataIzinMendirikanBangunan" class ="form-group">
				<div class ="col-xs-4">
					<label for="IMB">Fotokopi Izin Mendirikan Bangunan</label>
					<input type="file" id="IMBFile" name ="IMBFile" required>
				</div>
				<div class ="col-xs-4">
					<label for="SuratKeteranganLokasi">Surat Keterangan Lokasi Objek Perizinan</label>
					<input type="file" id="SuratKeteranganLokasiFile" name ="SuratKeteranganLokasiFile" required>
				</div>
			</div>
			
			<div id ="DataPajak" class ="form-group">
				<div class ="col-xs-4">
					<label for="NPWP">Fotokopi NPWP</label>
					<input type="file" id="NPWPFile" name ="NPWPFile" required>
				</div>
				
				<div class ="col-xs-4">
					<label for="PBB">Fotokopi Bukti Pelunasan PBB</label>
					<input type="file" id="PBBFile" name ="PBBFile" required>
				</div>
			</div>
			
			<div id ="DataLain" class ="form-group">
				<div class ="col-xs-5">
					<label for="AnalisaDampak">Analisa Dampak terhadap Lalulintas, Lingkungan, Sosial, dan Ekonomi</label>
					<input type="file" id="AnalisaDampakFile" name ="AnalisaDampakFile" required>
					<label for="RencanaKemitraan">Rencana Kemitraan dengan Usaha Mikro, Kecil, dan Menengah(UKM)</label>
					<input type="file" id="RencanaKemitraanFile" name ="RencanaKemitraanFile" required>
				</div>
				
				<div class ="col-xs-5">
					<label for="SuratPernyataanKebenaran">Surat Pernyataan Kebenaran Dokumen Persyaratan</label>
					<input type="file" id="SuratPernyataanKebenaranFile" name ="SuratPernyataanKebenaranFile" required>
					<br>
				</div>
			</div>
			<br><br><br>
			<button type="submit" class="btn btn-default">Daftar</button>
		</form>
	</div>
</div>
@endsection