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
