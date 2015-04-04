<?php $jenis = 'IzinTempatPenjualanMinumanBeralkohol';?>
<?php $stats = 'user';?>

@extends ('home.header')

@section ('content')
<script>
	$(document).ready(function(){
		$("#DataPribadi").toggle(true);
		$("#DataIzinUsahaTerpadu").toggle(false);
		$("#DataPajak").toggle(false);
		
		$("#DataPribadiButton").click(function(){
			$("#DataPribadi").toggle();
			if (!$("#DataIzinUsahaTerpadu").is(":hidden")) {
				$("#DataIzinUsahaTerpadu").toggle();
			}
			if (!$("#DataPajak").is(":hidden")) {
				$("#DataPajak").toggle();
			}
		});
		
		$("#DataIzinUsahaTerpaduButton").click(function(){
			$("#DataIzinUsahaTerpadu").toggle();
			if (!$("#DataPribadi").is(":hidden")) {
				$("#DataPribadi").toggle();
			}
			if (!$("#DataPajak").is(":hidden")) {
				$("#DataPajak").toggle();
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
		});
    });
</script>

	<div class ="container-fluid">
		<div class ="row">
			@include ('home.sidebar')
			
			<div class = "container-fluid">
				<h2> <p class ="text-center"><span class="label label-primary">Form Izin Tempat Penjualan Minuman Beralkohol</span> </p> </h2>
				<form role ="form" method ="post" enctype="multipart/form-data">
					<div class ="form-group">
						<button class="btn btn-default dropdown-toggle" id ="DataPribadiButton" type="button" data-toggle="dropdown">  <b>Data Pribadi</b> <span class="caret"></span></button>
						<button class="btn btn-default dropdown-toggle" id ="DataIzinUsahaTerpaduButton" type="button" data-toggle="dropdown">  <b>Data Izin Usaha Terpadu</b> <span class="caret"></span></button>
						<button class="btn btn-default dropdown-toggle" id ="DataPajakButton" type="button" data-toggle="dropdown">  <b>Data Pajak</b> <span class="caret"></span></button>
					</div>
					
					<div class ="form-group" id ="DataPribadi">
						<div class ="col-md-4">
							<label for="KTP">Fotokopi KTP Pimpinan</label>
							<input type="file" id="KTPFile" name="KTPFile">
						</div>
					</div>
					
					<div id ="DataIzinUsahaTerpadu" class ="form-group">
						<div class ="col-md-4">
							<label for="AktaPendirian">Fotokopi Akta Pendirian Perusahaan</label>
							<input type="file" id="AktaPendirianFile" name="AktaPendirianFile">
							<label for="SuratIzinPerdagangan">Fotokopi Surat Izin Perdagangan</label>
							<input type="file" id="SuratIzinPerdaganganFile" name="SuratIzinPerdaganganFile">
						</div>
						
						<div class ="col-md-4">
							<label for="SuratIzinUsahaKepariwisataan">Fotokopi Surat Izin Usaha Kepariwisataan</label>
							<input type="file" id="SuratIzinUsahaKepariwisataanFile" name="SuratIzinUsahaKepariwisataanFile">
							<label for="SuratIzinPerdagangan">Fotokopi Surat Izin Perdagangan</label>
							<input type="file" id="SuratIzinPerdaganganFile" name="SuratIzinPerdaganganFile">
						</div>
						
						<div class ="col-md-4">
							<label for="TandaDaftarPerusahaan">Fotokopi Tanda Daftar Perusahaan</label>
							<input type="file" id="TandaDaftarPerusahaanFile" name="TandaDaftarPerusahaanFile">
							<label for="SuratIzinGangguan">Fotokopi Surat Izin Gangguan</label>
							<input type="file" id="SuratIzinGangguanFile" name ="SuratIzinGangguanFile">
						</div>
						
						<div class ="col-md-4">
							<label for="SuratKepemilikanTempat">Fotokopi Surat Kepemilikan Tempat</label>
							<input type="file" id="SuratKepemilikanTempatFile" name ="SuratKepemilikanTempatFile">
						</div>
					</div>
					
					<div id ="DataPajak" class ="form-group">
						<div class ="col-md-4">
							<label for="NPWP">Fotokopi NPWP</label>
							<input type="file" id="NPWPFile" name ="NPWPFile">
						</div>
					</div>
					<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
					<button type="submit" class="btn btn-default">Daftar</button>
				</form>
			</div>
		</div>
	</div>
@endsection