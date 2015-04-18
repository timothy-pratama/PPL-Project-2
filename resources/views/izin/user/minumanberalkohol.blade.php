<?php $jenis = 'IzinTempatPenjualanMinumanBeralkohol';?>
<?php $stats = 'user';?>

@extends ('home.headeruser')

@section ('content')
<script>
	$(document).ready(function(){
		$("#DataPribadi").toggle(true);
		$("#DataIzinUsahaTerpadu").toggle(false);
		$("#DataPajak").toggle(false);
		$("#DataLain").toggle(false);
		
		$("#DataPribadiButton").click(function(){
			$("#DataPribadi").toggle();
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
		
		$("#DataIzinUsahaTerpaduButton").click(function(){
			$("#DataIzinUsahaTerpadu").toggle();
			if (!$("#DataPribadi").is(":hidden")) {
				$("#DataPribadi").toggle();
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
			if (!$("#DataPajak").is(":hidden")) {
				$("#DataPajak").toggle();
			}
		});
    });
</script>
	<div class="col-xs-2"></div>
	<div class="col-xs-10">
		<h2 class ="text-center"><span class="label label-primary">Form Izin Tempat Penjualan Minuman Beralkohol</span></h2>
		<br><br>
		<form role ="form" method ="POST" enctype="multipart/form-data" action="{{ url('izin/IzinTempatPenjualanMinumanBeralkohol/store') }}">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class ="form-group">
				<button class="btn btn-default dropdown-toggle" id ="DataPribadiButton" type="button" data-toggle="dropdown">  <b>Data Pribadi</b> <span class="caret"></span></button>
				<button class="btn btn-default dropdown-toggle" id ="DataIzinUsahaTerpaduButton" type="button" data-toggle="dropdown">  <b>Data Izin Usaha Terpadu</b> <span class="caret"></span></button>
				<button class="btn btn-default dropdown-toggle" id ="DataPajakButton" type="button" data-toggle="dropdown">  <b>Data Pajak</b> <span class="caret"></span></button>
				<button class="btn btn-default dropdown-toggle" id ="DataLainButton" type="button" data-toggle="dropdown">  <b>Data Lainnya</b> <span class="caret"></span></button>
			</div>
			
			<div class ="form-group" id ="DataPribadi">
				<div class ="col-xs-4">
					<label for="KTP">Fotokopi KTP Pimpinan</label>
					<input type="file" id="KTPFile" name="KTPFile" required>
				</div>
			</div>
			
			<div id ="DataIzinUsahaTerpadu" class ="form-group">
				<div class ="col-xs-4">
					<label for="AktaPendirian">Fotokopi Akta Pendirian Perusahaan</label>
					<input type="file" id="AktaPendirianFile" name="AktaPendirianFile" required>
					<label for="SuratIzinPerdagangan">Fotokopi Surat Izin Perdagangan</label>
					<input type="file" id="SuratIzinPerdaganganFile" name="SuratIzinPerdaganganFile" required>
				</div>
				
				<div class ="col-xs-4">
					<label for="SuratIzinUsahaKepariwisataan">Fotokopi Surat Izin Usaha Kepariwisataan</label>
					<input type="file" id="SuratIzinUsahaKepariwisataanFile" name="SuratIzinUsahaKepariwisataanFile" required>
					<label for="SuratKepemilikanTempat">Fotokopi Surat Kepemilikan Tempat</label>
					<input type="file" id="SuratKepemilikanTempatFile" name ="SuratKepemilikanTempatFile" required>
				</div>
				
				<div class ="col-xs-4">
					<label for="TandaDaftarPerusahaan">Fotokopi Tanda Daftar Perusahaan</label>
					<input type="file" id="TandaDaftarPerusahaanFile" name="TandaDaftarPerusahaanFile" required>
					<label for="SuratIzinGangguan">Fotokopi Surat Izin Gangguan</label>
					<input type="file" id="SuratIzinGangguanFile" name ="SuratIzinGangguanFile" required>
				</div>
			</div>
			
			<div id ="DataPajak" class ="form-group">
				<div class ="col-xs-4">
					<label for="NPWP">Fotokopi NPWP</label>
					<input type="file" id="NPWPFile" name ="NPWPFile" required>
				</div>
			</div>
			
			<div id ="DataLain" class ="form-group">
				<div class ="col-xs-5">
					<b>Jenis Minuman Beralkohol</b>
					<select class="form-control" id ="JenisAlkohol" name ="JenisAlkohol">
						<option>Golongan A (kadar alkohol 1%-5%)</option>	
						<option>Golongan B (kadar alkohol 5%-20%)</option>	
						<option>Golongan C (kadar alkohol 20%-55%)</option>	
					</select>
				</div>
			</div>
			<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
			<button type="submit" class="btn btn-default">Daftar</button>
		</form>
	</div>
</div>
@endsection