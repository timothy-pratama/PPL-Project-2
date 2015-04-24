<?php namespace App\Http\Controllers;

use App\Izin;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Redirect;
use DB;

class TandaPendaftaranWaralabaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function user()
	{
		return view('izin.user.waralaba');
	}
	
	public function admin() 
	{
		$izin = Izin::where('JenisIzin','=','STPW')->get();
		return view('izin.admin.waralaba', compact('izin'));
	}
	
	public function updateStatus($id,$status){
		Izin::where('id', $id)->update(['StatusIzin' => $status]);
		return Redirect::to('Admin/izin/TandaPendaftaranWaralaba')->with('message', 'Status updated.');
	}
	
	public function downloadFile($id) {
	/*
		$zip = new ZipArchive();
		$folder = storage_path().'/Izin/STPW/'.$id.'/';
		$zipFile = "file.zip";
		$handle = opendir($folder); 
		while (false !== $f = readdir($handle)) { 
			if ($f != '.' && $f != '..') { 
				$filePath = "$folder/$f"; 
				if (is_file($filePath)) { 
				  $zipFile->addFile($filePath, $localPath); 
				} elseif (is_dir($filePath)) { 
				  // Add sub-directory. 
				  $zipFile->addEmptyDir($localPath); 
				  self::folderToZip($filePath, $zipFile, 0); 
				} 
			}
		}
		
		closedir($handle); */

		$zip = new ZipArchive();

		//return Redirect::to('Admin/izin/TandaPendaftaranWaralaba')->with('message', 'Download done.');
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
        $alamatPerusahaan = $request->get('alamat_perusahaan');
        $namaPerusahaan = $request->get('nama_perusahaan');

		/* Get each document from user form's submission */
		$KTPFile = $request->file('KTPFile');
		$TandaDaftarPerusahaanFile = $request->file('TandaDaftarPerusahaanFile');
		$AktaPendirianFile = $request->get('AktaPendirianFile');
		$IzinTeknisFile = $request->file('IzinTeknisFile');
		$ProspektusPenawaranWaralabaFile = $request->file('ProspektusPenawaranWaralabaFile');
		$PerjanjianWaralabaFile = $request->file('PerjanjianWaralabaFile');
		$HAKIFile = $request->file('HAKIFile');
		$STPWFile = $request->file('STPWFile');

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
			'JenisIzin' => 'STPW', 
			'TanggalMasuk' => $date, 
			'BerlakuSampai' => $date, 
			'StatusIzin' => 'Diterima', 
			'DokumenPersetujuan' => 'localhost:8000', 
			'created_at' => $date, 
			'updated_at' => $date
			]
		);

		/* Destination Path */
		$DestinationPath = storage_path().'\\Izin\\STPW\\'.$id.'\\';

		/* Get each document file name */
		$KTPFileName = $KTPFile->getClientOriginalName();
		$TandaDaftarPerusahaanFileName = $TandaDaftarPerusahaanFile->getClientOriginalName();
		$IzinTeknisFileName = $IzinTeknisFile->getClientOriginalName();
		$ProspektusPenawaranWaralabaFileName = $ProspektusPenawaranWaralabaFile->getClientOriginalName();
		$PerjanjianWaralabaFileName = $PerjanjianWaralabaFile->getClientOriginalName();
		$HAKIFileName = $HAKIFile->getClientOriginalName();
		$STPWFileName = $STPWFile->getClientOriginalName();

		/* Move each uploaded files to destination path */
		$KTPFile->move($DestinationPath, $KTPFileName);
		$TandaDaftarPerusahaanFile->move($DestinationPath, $TandaDaftarPerusahaanFileName);
		$IzinTeknisFile->move($DestinationPath, $IzinTeknisFileName);
		$ProspektusPenawaranWaralabaFile->move($DestinationPath, $ProspektusPenawaranWaralabaFileName);
		$PerjanjianWaralabaFile->move($DestinationPath, $PerjanjianWaralabaFileName);
		$HAKIFile->move($DestinationPath, $HAKIFileName);
		$STPWFile->move($DestinationPath, $STPWFileName);		

		/* Insert izin to table IzinUsahaPusatPerbelanjaan */
		DB::table('TandaPendaftaranWaralaba')->insert(
			[
			'idIzin' => $id, 
			'STPWPemberiWaralaba' => $DestinationPath.$STPWFileName,
			'HAKI' =>$DestinationPath.$HAKIFileName,
			'PerjanjianWaralaba' => $DestinationPath.$PerjanjianWaralabaFileName,
			'IzinTeknis' => $DestinationPath.$IzinTeknisFileName,
			'ProspektusPenawaranWaralaba' => $DestinationPath.$ProspektusPenawaranWaralabaFileName,
			'KTPPimpinan' => $DestinationPath.$KTPFileName,
			'TandaDaftarPerusahaan' => $DestinationPath.$TandaDaftarPerusahaanFileName,
			'AktaPendirianPerusahaan' => $AktaPendirianFile,
			]
		);

        $message = "Data berhasil disimpan";
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
