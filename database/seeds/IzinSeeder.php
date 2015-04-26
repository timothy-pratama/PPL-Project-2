<?php
 
use Illuminate\Database\Seeder;
 
class IzinSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('izin')->delete();
 
        $izins = array(
            ['NamaPemohon' => 'Tony', 'NamaPerusahaan'=> 'Astra Ago Lestari', 'JenisIzin' => 'IUTM','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Diterima','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'William', 'NamaPerusahaan'=> 'BISI International', 'JenisIzin' => 'IUPP','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Diterima','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Icha', 'NamaPerusahaan'=> 'BW Plantations', 'JenisIzin' => 'IUPT','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Diterima','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Riady', 'NamaPerusahaan'=> 'Gozco Plantations', 'JenisIzin' => 'ITPMB','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Diterima','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Timothy', 'NamaPerusahaan'=> 'Jaya Agra Wattie', 'JenisIzin' => 'STPW','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Diterima','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Stefan', 'NamaPerusahaan'=> 'Sampoerna Agro', 'JenisIzin' => 'IUTM','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Diterima','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Pratama', 'NamaPerusahaan'=> 'Central Omega Resources', 'JenisIzin' => 'IUPP','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Diterima','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Hartono', 'NamaPerusahaan'=> 'ABM Investama', 'JenisIzin' => 'IUPT','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Diterima','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Sastra', 'NamaPerusahaan'=> 'Alam Karya Unggul', 'JenisIzin' => 'ITPMB','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Diterima','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Kusuma', 'NamaPerusahaan'=> 'Bumi Citra Permai', 'JenisIzin' => 'STPW','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Diterima','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
		);
 
        // Uncomment the below to run the seeder
        DB::table('izin')->insert($izins);

        DB::table('pengguna')->delete();
        DB::table('pengguna')->insert(
            ['nama'=>'current_username']
        );

        DB::table('admin')->delete();
        $admins = array(
            ['username'=>'timothy','password'=>'timothy','nama'=>'Timothy Pratama'],
            ['username'=>'william','password'=>'william','nama'=>'William Stefan Hartono'],
            ['username'=>'icha','password'=>'icha','nama'=>'Choirunnisa Fatima'],
            ['username'=>'tony','password'=>'tony','nama'=>'Tony'],
            ['username'=>'riady','password'=>'riady','nama'=>'Riady Sastra Kusuma']);
        DB::table('admin')->insert($admins);
    }
 
}