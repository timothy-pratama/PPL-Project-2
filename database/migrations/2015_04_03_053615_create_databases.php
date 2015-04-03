<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabases extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Izin', function(Blueprint $table) {
			$table->increments('id');
			$table->string('NamaPemohon')->default('');
			$table->string('JenisIzin')->default('');
			$table->date('TanggalMasuk');
			$table->date('BerlakuSampai');				
			$table->boolean('StatusIzin')->default(false);
			$table->string('DokumenPersetujuan')->default('');
			$table->timestamps();
		});
		
		Schema::create('TandaPendaftaranWaralaba', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('idIzin')->unsigned()->default(0);
			$table->foreign('idIzin')->references('id')->on('Izin')->onDelete('cascade');
			$table->string('STPWPemberiWaralaba')->default('');
			$table->string('HAKI')->default('');
			$table->string('PerjanjianWaralaba')->default('');
			$table->string('IzinTeknis')->default('');
			$table->string('ProspektusPenawaranWaralaba')->default('');
			$table->string('KTPPimpinan')->default('');
			$table->string('TandaDaftarPerusahaan')->default('');
			$table->string('AktaPendirianPerusahaan')->default('');
			$table->timestamps();
		});

		Schema::create('IzinTempatPenjualanMinumanBeralkohol', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('idIzin')->unsigned()->default(0);
			$table->foreign('idIzin')->references('id')->on('Izin')->onDelete('cascade');
			$table->string('IzinUsahaKepariwisataan')->default('');
			$table->string('NPWP')->default('');
			$table->string('JenisMinumanBeralkohol')->default('');
			$table->string('KTPPimpinan')->default('');
			$table->string('AktaPendirianPerusahaan')->default('');
			$table->string('IzinUsahaPerdagangan')->default('');
			$table->string('TandaDaftarPerusahaan')->default('');
			$table->string('IzinGangguan')->default('');
			$table->string('KepemilikanTempat')->default('');
			$table->timestamps();
		});

		Schema::create('Pengguna', function(Blueprint $table) {
			$table->increments('id');
			$table->string('email');
			$table->string('password');
			$table->boolean('isAdmin'); 	
			$table->timestamps();
		});

		Schema::create('IzinUsahaPusatPerbelanjaan', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('idIzin')->unsigned()->default(0);
			$table->foreign('idIzin')->references('id')->on('Izin')->onDelete('cascade');
			$table->string('PengesahanKehakiman')->default('');
			$table->string('AktaPendirianPerusahaan')->default('');
			$table->string('SuratKepemilikanTempat')->default('');
			$table->string('IzinGangguan')->default('');
			$table->string('PasFoto')->default('');
			$table->string('SuratPernyataanKebenaran')->default('');
			$table->string('KemitraanUMKM')->default('');
			$table->string('AnalisaDampakLingkungan')->default('');
			$table->string('SuratKeteranganLokasi')->default('');
			$table->string('KTPPimpinan')->default('');
			$table->string('NPWP')->default('');
			$table->string('BuktiPelunasanPBB')->default('');
			$table->string('IMB')->default('');
			$table->string('SuratIzinBKPM')->default('');
			$table->string('NeracaModalPerusahaan')->default('');
			$table->string('DomisiliPerusahaan')->default('');
			$table->timestamps();
		});

		Schema::create('IzinUsahaTokoModern', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('idIzin')->unsigned()->default(0);
			$table->foreign('idIzin')->references('id')->on('Izin')->onDelete('cascade');
			$table->string('PengesahanKehakiman')->default('');
			$table->string('AktaPendirianPerusahaan')->default('');
			$table->string('SuratKepemilikanTempat')->default('');
			$table->string('IzinGangguan')->default('');
			$table->string('PasFoto')->default('');
			$table->string('SuratPernyataanKebenaran')->default('');
			$table->string('KemitraanUMKM')->default('');
			$table->string('AnalisaDampakLingkungan')->default('');
			$table->string('SuratKeteranganLokasi')->default('');
			$table->string('KTPPimpinan')->default('');
			$table->string('NPWP')->default('');
			$table->string('BuktiPelunasanPBB')->default('');
			$table->string('IMB')->default('');
			$table->string('SuratIzinBKPM')->default('');
			$table->string('NeracaModalPerusahaan')->default('');
			$table->string('DomisiliPerusahaan')->default('');
			$table->timestamps();
		});

		Schema::create('IzinUsahaPasarTradisional', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('idIzin')->unsigned()->default(0);
			$table->foreign('idIzin')->references('id')->on('Izin')->onDelete('cascade');
			$table->string('PengesahanKehakiman')->default('');
			$table->string('AktaPendirianPerusahaan')->default('');
			$table->string('SuratKepemilikanTempat')->default('');
			$table->string('IzinGangguan')->default('');
			$table->string('PasFoto')->default('');
			$table->string('SuratPernyataanKebenaran')->default('');
			$table->string('KemitraanUMKM')->default('');
			$table->string('AnalisaDampakLingkungan')->default('');
			$table->string('SuratKeteranganLokasi')->default('');
			$table->string('KTPPimpinan')->default('');
			$table->string('NPWP')->default('');
			$table->string('BuktiPelunasanPBB')->default('');
			$table->string('IMB')->default('');
			$table->string('SuratIzinBKPM')->default('');
			$table->string('NeracaModalPerusahaan')->default('');
			$table->string('DomisiliPerusahaan')->default('');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TandaPendaftaranWaralaba');
		Schema::drop('IzinTempatPenjualanMinumanBeralkohol');
		Schema::drop('IzinUsahaPasarTradisional');
		Schema::drop('IzinUsahaTokoModern');
		Schema::drop('IzinUsahaPusatPerbelanjaan');
		Schema::drop('Izin');
		Schema::drop('Pengguna');
	}

}
