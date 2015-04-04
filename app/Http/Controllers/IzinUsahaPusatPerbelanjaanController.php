<?php namespace App\Http\Controllers;

use App\Izin;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Redirect;

class IzinUsahaPusatPerbelanjaanController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function user()
	{
		return view('izin.user.pusatperbelanjaan');
	}
	
	public function admin() 
	{
		$izin = Izin::where('JenisIzin','=','IUPP')->get();
		return view('izin.admin.pusatperbelanjaan', compact('izin'));
	}
	
	public function updateStatus($id,$status){
		Izin::where('id', $id)->update(['StatusIzin' => $status]);
		return Redirect::to('Admin/izin/IzinUsahaPusatPerbelanjaan')->with('message', 'Status updated.');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$KTPPimpinan = $request->file('KTPFile');
		$PasFoto = $request->file('PasFotoFile');
		$SuratIzinGangguan = $request->file('SuratIzinGangguanFile');
		$SuratKepemilikanTempat = $request->file('SuratKepemilikanTempatFile');
		$AktaPendirian = $request->file('');
		$FotokopiPengesahanKehakiman = $request->file('FotokopiPengesahanKehakimanFile');
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
		
		dd($request);
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
