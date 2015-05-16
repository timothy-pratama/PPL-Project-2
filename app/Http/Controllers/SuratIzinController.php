<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\PDF;
use App;
use App\Izin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;
use Input;
use App\database;

class SuratIzinController extends Controller 
{
    public function index(){}

    public function getSuratIzin($id){
        $izin = Izin::where('id','=',$id)->first();

        if ($izin->StatusIzin === 'Disetujui'){
            $pdf = App::make('dompdf');
            $parameter = array();

            if ($izin->JenisIzin === 'IUTM'){
                $parameter['namasurat'] = "Izin Usaha Toko Modern (IUTM)";
                $parameter['kegiatanusaha'] = "Minimarket/supermarket/departement store/hypermarket/perkulakan 'Barokah'";
                $parameter['bidangusaha'] = "Toko modern";
                $parameter['daftarulang'] = "5 (lima)";
                $parameter['peraturan'] = "Peraturan Walikota Bandung Nomor 335 Tahun 2012";
                $parameter['ketentuan2'] = "Hanya berlaku untuk 1 (satu) lokasi usaha.";
            } else if ($izin->JenisIzin === 'IUPT'){
                $parameter['namasurat'] = "Izin Usaha Pengelolaan Pasar Tradisional (IUP2T)";
                $parameter['kegiatanusaha'] = "Pengelolaan pasar tradisional 'Suci'";
                $parameter['bidangusaha'] = "Pasar tradisional";
                $parameter['daftarulang'] = "5 (lima)";
                $parameter['peraturan'] = "Peraturan Walikota Bandung Nomor 335 Tahun 2012";
                $parameter['ketentuan2'] = "Hanya berlaku untuk 1 (satu) lokasi usaha.";
            } else if ($izin->JenisIzin === 'ITPMB'){
                $parameter['namasurat'] = "Izin Tempat Penjualan Minuman Berakohol (ITPMB)";
                $parameter['kegiatanusaha'] = "Penjualan minuman berakohol";
                $parameter['bidangusaha'] = "Minuman berakohol yang dijual secara eceran dan/atau secara langsung untuk diminum";
                $parameter['daftarulang'] = "1 (satu)";
                $parameter['peraturan'] = "Peraturan Daerah Kota Bandung Nomor 11 Tahun 2010";
                $parameter['ketentuan2'] = "Badan usaha, pengelola atau penanggung jawab usaha wajib menyampaikan laporan kepada Walikota 
                melalui SKPD yang ditunjuk yang membidangi urusan perdagan, paling lambat 2 (dua) bulan sekali.";             
            } else if ($izin->JenisIzin === 'IUPP'){
                $parameter['namasurat'] = "Izin Usaha Pusat Perbelanjaan (IUPP)";
                $parameter['kegiatanusaha'] = "Pertokoan/mall/plaza/pusat perdagangan 'Javamall'";
                $parameter['bidangusaha'] = "Pusat perbelanjaan";
                $parameter['daftarulang'] = "5 (lima)";
                $parameter['peraturan'] = "Peraturan Walikota Bandung Nomor 335 Tahun 2012";
                $parameter['ketentuan2'] = "Hanya berlaku untuk 1 (satu) lokasi usaha.";
            } else if ($izin->JenisIzin === 'STPW'){
                $parameter['namasurat'] = "Surat Tanda Pendaftaran Waralaba (STPW)";
                $parameter['kegiatanusaha'] = "";
                $parameter['bidangusaha'] = "";
                $parameter['daftarulang'] = "5 (lima)";
                $parameter['peraturan'] = "Peraturan Walikota Bandung Nomor 335 Tahun 2012";
                $parameter['ketentuan2'] = "";                
            }
            $parameter['nomorsurat'] = "510/2 - 0077 -DISKUKM & PERINDAG/2008";
            $parameter['namaperusahaan'] = $izin->NamaPerusahaan;
            $parameter['alamatperusahaan'] = $izin->AlamatPerusahaan;
            $parameter['namapemilik'] = $izin->NamaPemohon;
            $parameter['tanggal'] = "17 Maret 2008";
            $parameter['berlakusampai'] = date('d-m-Y', strtotime($izin->BerlakuSampai));
            $parameter['kecamatan'] = "Antapani";
            $parameter['namakepala'] = "Drs. H. Ernawan Natasaputra";
            $parameter['jabatankepala'] = "Pembina Utama Muda";
            $parameter['nipkepala'] = "190 000 393";
            $pdf->loadView('SuratIzin', $parameter)->setPaper('a4')->setOrientation('portrait')->setWarnings(false)->save('myfile.pdf');
            
            DB::table('izin')->where('id',$id)->update(['DokumenPersetujuan' => '/suratizin/'.$id]);
            return $pdf->download('izin.pdf');
        }   
    }
}