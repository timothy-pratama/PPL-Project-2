<?php namespace App\Http\Controllers;

use App\Izin;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Redirect;
use DB;

class IzinTempatPenjualanMinumanBeralkoholController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function user()
	{
		return view('izin.user.minumanberalkohol');
	}
	
	public function admin() 
	{
		$izin = Izin::where('JenisIzin','=','ITPMB')->get();
		return view('izin.admin.minumanberalkohol', compact('izin'));
	}
	
	public function updateStatus($id,$status){
		Izin::where('id', $id)->update(['StatusIzin' => $status]);
		return Redirect::to('Admin/izin/IzinTempatPenjualanMinumanBeralkohol')->with('message', 'Status updated.');
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
        $namaPerusahaan = $request->get('nama_perusahaan');
        $alamatPerusahaan = $request->get('alamat_perusahaan');

		$KTPFile = $request->file('KTPFile');
		$AktaPendirian = $request->get('AktaPendirianPerusahaan');
		$SuratIzinPerdaganganFile = $request->file('SuratIzinPerdaganganFile');
		$SuratIzinUsahaKepariwisataanFile = $request->file('SuratIzinUsahaKepariwisataanFile');
		$SuratKepemilikanTempatFile = $request->file('SuratKepemilikanTempatFile');
		$TandaDaftarPerusahaanFile = $request->file('TandaDaftarPerusahaanFile');
		$IzinGangguan = $request->get('NomorSuratIzinGangguan');
		$NPWP = $request->get('NPWP');
		$JenisAlkohol = $request->input('JenisAlkohol');

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
            'AlamatPerusahaan' => $alamatPerusahaan,
            'NamaPerusahaan'  => $namaPerusahaan,
			'JenisIzin' => 'STPMB', 
			'TanggalMasuk' => $date, 
			'BerlakuSampai' => $date, 
			'StatusIzin' => 'Sudah Diterima', 
			'DokumenPersetujuan' => 'localhost:8000', 
			'created_at' => $date, 
			'updated_at' => $date
			]
		);

		/* Destination Path */
		$DestinationPath = storage_path().'\\Izin\\Izin Tempat Penjualan Minuman Beralkohol\\'.$id.'\\';

		/* Get each document file name */
		$KTPFileName = $KTPFile->getClientOriginalName();
		$SuratIzinPerdaganganFileName = $SuratIzinPerdaganganFile->getClientOriginalName();
		$SuratIzinUsahaKepariwisataanFileName = $SuratIzinUsahaKepariwisataanFile->getClientOriginalName();
		$SuratKepemilikanTempatFileName = $SuratKepemilikanTempatFile->getClientOriginalName();
		$TandaDaftarPerusahaanFileName = $TandaDaftarPerusahaanFile->getClientOriginalName();

		/* Move each uploaded files to destination path */
		$KTPFile->move($DestinationPath, $KTPFileName);
		$SuratIzinPerdaganganFile->move($DestinationPath, $SuratIzinPerdaganganFileName);
		$SuratIzinUsahaKepariwisataanFile->move($DestinationPath, $SuratIzinUsahaKepariwisataanFileName);
		$SuratKepemilikanTempatFile->move($DestinationPath, $SuratKepemilikanTempatFileName);
		$TandaDaftarPerusahaanFile->move($DestinationPath, $TandaDaftarPerusahaanFileName);

		/* Insert izin to table IzinUsahaPusatPerbelanjaan */
		DB::table('IzinTempatPenjualanMinumanBeralkohol')->insert(
			[
			'idIzin' => $id, 
			'IzinusahaKepariwisataan' => $DestinationPath.$SuratIzinUsahaKepariwisataanFileName,
			'NPWP' =>$NPWP,
			'JenisMinumanBeralkohol' => $JenisAlkohol,
			'KTPPimpinan' => $DestinationPath.$KTPFileName,
			'AktaPendirianPerusahaan' => $AktaPendirian,
			'IzinusahaPerdagangan' => $DestinationPath.$SuratIzinPerdaganganFileName,
			'TandaDaftarPerusahaan' => $DestinationPath.$TandaDaftarPerusahaanFileName,
			'IzinGangguan' => $IzinGangguan,
			'KepemilikanTempat' => $DestinationPath.$SuratKepemilikanTempatFileName,
			]
		);
        $message = 'Data berhasil disimpan';
		return view('izin.user.result',compact('message'));
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
