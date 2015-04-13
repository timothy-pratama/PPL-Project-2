<?php namespace App\Http\Controllers;

use App\Izin;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Redirect;
use DB;

class IzinUsahaTokoModernController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function user()
	{
		return view('izin.user.tokomodern');
	}
	
	public function admin() 
	{
		$izin = Izin::where('JenisIzin','=','IUTM')->get();
		return view('izin.admin.tokomodern', compact('izin'));
	}
	
	public function updateStatus($id,$status){
		Izin::where('id', $id)->update(['StatusIzin' => $status]);
		return Redirect::to('Admin/izin/IzinUsahaTokoModern')->with('message', 'Status updated.');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		/* Get uploaded file from user */
		$KTPPimpinan = $request->file('KTPFile');
		$PasFoto = $request->file('PasfotoFile');
		$SuratIzinGangguan = $request->file('SuratIzinGangguanFile');
		$SuratKepemilikanTempat = $request->file('SuratKepemilikanTempatFile');
		$AktaPendirian = $request->file('AktaPendirianFile');
		$FotokopiPengesahanKehakiman = $request->file('PengesahanKehakimanFile');
		$DomisiliPerusahaan = $request->file('DomisiliPerusahaanFile');
		$BKPM = $request->file('BKPMFile');
		$NeracaModal = $request->file('NeracaModalFile');
		$IMB = $request->file('IMBFile');
		$SuratKeteranganLokasi = $request->file('SuratKeteranganLokasiFile');
		$NPWP = $request->file('NPWPFile');
		$PBB = $request->file('PBBFile');
		$AnalisaDampak = $request->file('AnalisaDampakFile');
		$RencanaKemitraan = $request->file('RencanaKemitraanFile');
		$SuratPernyataanKebenaran = $request->file('SuratPernyataanKebenaranFile');

		/* Get maximum ID from table Izin */
		$id = DB::table('izin')->max('id');

		/* Get ID for the new izin entry */
		$id = $id + 1;

		/* Get current timestamp */
		$date = new \DateTime;

		/* Insert izin to table Izin */
		DB::table('izin')->insert(
			[
			'id' => $id, 
			'NamaPemohon' => 'Pemohon', 
			'JenisIzin' => 'IUTM', 
			'TanggalMasuk' => $date, 
			'BerlakuSampai' => $date, 
			'StatusIzin' => 'Diterima', 
			'DokumenPersetujuan' => 'localhost:8000', 
			'created_at' => $date, 
			'updated_at' => $date
			]
		);

		/* Destination Path */
		$DestinationPath = storage_path().'\\Izin\\IUTM\\'.$id.'\\';

		/* Get each document file name */
		$KTPPimpinanFileName = $KTPPimpinan->getClientOriginalName();
		$PasFotoFileName = $PasFoto->getClientOriginalName();
		$SuratIzinGangguanFileName = $SuratIzinGangguan->getClientOriginalName();
		$SuratKepemilikanTempatFileName = $SuratKepemilikanTempat->getClientOriginalName();
		$AktaPendirianFileName = $AktaPendirian->getClientOriginalName();
		$FotokopiPengesahanKehakimanFileName = $FotokopiPengesahanKehakiman->getClientOriginalName();
		$DomisiliPerusahaanFileName = $DomisiliPerusahaan->getClientOriginalName();
		$BKPMFileName = $BKPM->getClientOriginalName();
		$NeracaModalFileName = $NeracaModal->getClientOriginalName();
		$IMBFileName = $IMB->getClientOriginalName();
		$SuratKeteranganLokasiFileName = $SuratKeteranganLokasi->getClientOriginalName();
		$NPWPFileName = $NPWP->getClientOriginalName();
		$PBBFileName = $PBB->getClientOriginalName();
		$AnalisaDampakFileName = $AnalisaDampak->getClientOriginalName();
		$RencanaKemitraanFileName = $RencanaKemitraan->getClientOriginalName();
		$SuratPernyataanKebenaranFileName = $SuratPernyataanKebenaran->getClientOriginalName();

		/* Move each uploaded files to destination path */
		$KTPPimpinan->move($DestinationPath, $KTPPimpinanFileName);
		$PasFoto->move($DestinationPath, $PasFotoFileName);
		$SuratIzinGangguan->move($DestinationPath, $SuratIzinGangguanFileName);
		$SuratKepemilikanTempat->move($DestinationPath, $SuratKepemilikanTempatFileName);
		$AktaPendirian->move($DestinationPath, $AktaPendirianFileName);
		$FotokopiPengesahanKehakiman->move($DestinationPath, $FotokopiPengesahanKehakimanFileName);
		$DomisiliPerusahaan->move($DestinationPath, $DomisiliPerusahaanFileName);
		$BKPM->move($DestinationPath, $BKPMFileName);
		$NeracaModal->move($DestinationPath, $NeracaModalFileName);
		$IMB->move($DestinationPath, $IMBFileName);
		$SuratKeteranganLokasi->move($DestinationPath, $SuratKeteranganLokasiFileName);
		$NPWP->move($DestinationPath, $NPWPFileName);
		$PBB->move($DestinationPath, $PBBFileName);
		$AnalisaDampak->move($DestinationPath, $AnalisaDampakFileName);
		$RencanaKemitraan->move($DestinationPath, $RencanaKemitraanFileName);
		$SuratPernyataanKebenaran->move($DestinationPath, $SuratPernyataanKebenaranFileName);

		/* Insert izin to table IzinUsahaPusatPerbelanjaan */
		DB::table('IzinUsahaTokoModern')->insert(
			[
			'idIzin' => $id, 
			'PengesahanKehakiman' => $DestinationPath.$FotokopiPengesahanKehakimanFileName,
			'AktaPendirianPerusahaan' =>$DestinationPath.$AktaPendirianFileName,
			'SuratKepemilikanTempat' => $DestinationPath.$SuratKepemilikanTempatFileName,
			'IzinGangguan' => $DestinationPath.$SuratIzinGangguanFileName,
			'PasFoto' => $DestinationPath.$PasFotoFileName,
			'SuratPernyataanKebenaran' => $DestinationPath.$SuratPernyataanKebenaranFileName,
			'KemitraanUMKM' => $DestinationPath.$RencanaKemitraanFileName,
			'AnalisaDampakLingkungan' => $DestinationPath.$AnalisaDampakFileName,
			'SuratKeteranganLokasi' => $DestinationPath.$SuratKeteranganLokasiFileName,
			'KTPPimpinan' => $DestinationPath.$KTPPimpinanFileName,
			'NPWP' => $DestinationPath.$NPWPFileName,
			'BuktiPelunasanPBB' => $DestinationPath.$PBBFileName,
			'IMB' => $DestinationPath.$IMBFileName,
			'SuratIzinBKPM' => $DestinationPath.$BKPMFileName,
			'NeracaModalPerusahaan' => $DestinationPath.$NeracaModalFileName,
			'DomisiliPerusahaan' => $DestinationPath.$DomisiliPerusahaanFileName
			]
		);

		return('data berhasil disubmit');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
