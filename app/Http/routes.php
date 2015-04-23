<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

/* User Routing */
Route::get('izin', ['uses'=>'IzinController@user','as'=>'userhome']);
Route::get('izin/IzinTempatPenjualanMinumanBeralkohol', 'IzinTempatPenjualanMinumanBeralkoholController@user');
Route::get('izin/IzinUsahaPasarTradisional', 'IzinUsahaPasarTradisionalController@user');
Route::get('izin/IzinUsahaPusatPerbelanjaan', 'IzinUsahaPusatPerbelanjaanController@user');
Route::get('izin/IzinUsahaTokoModern', 'IzinUsahaTokoModernController@user');
Route::get('izin/TandaPendaftaranWaralaba', 'TandaPendaftaranWaralabaController@user');

/* Admin Routing */
Route::get('Admin/izin', 'IzinController@admin');
Route::get('Admin/izin/IzinTempatPenjualanMinumanBeralkohol', 'IzinTempatPenjualanMinumanBeralkoholController@admin');
Route::get('Admin/izin/IzinUsahaPasarTradisional', 'IzinUsahaPasarTradisionalController@admin');
Route::get('Admin/izin/IzinUsahaPusatPerbelanjaan', 'IzinUsahaPusatPerbelanjaanController@admin');
Route::get('Admin/izin/IzinUsahaTokoModern', 'IzinUsahaTokoModernController@admin');
Route::get('Admin/izin/TandaPendaftaranWaralaba', 'TandaPendaftaranWaralabaController@admin');

/* Admin: Update Status */
Route::get('Admin/izin/IzinTempatPenjualanMinumanBeralkohol/{id}/status/{status}', 'IzinTempatPenjualanMinumanBeralkoholController@updateStatus');
Route::get('Admin/izin/IzinUsahaPasarTradisional/{id}/status/{status}', 'IzinUsahaPasarTradisionalController@updateStatus');
Route::get('Admin/izin/IzinUsahaPusatPerbelanjaan/{id}/status/{status}', 'IzinUsahaPusatPerbelanjaanController@updateStatus');
Route::get('Admin/izin/IzinUsahaTokoModern/{id}/status/{status}', 'IzinUsahaTokoModernController@updateStatus');
Route::get('Admin/izin/TandaPendaftaranWaralaba/{id}/status/{status}', 'TandaPendaftaranWaralabaController@updateStatus');

/* User: Storing File */
Route::post('izin/IzinUsahaPusatPerbelanjaan/store','IzinUsahaPusatPerbelanjaanController@store');
Route::post('izin/IzinTempatPenjualanMinumanBeralkohol/store','IzinTempatPenjualanMinumanBeralkoholController@store');
Route::post('izin/IzinUsahaTokoModern/store','IzinUsahaTokoModernController@store');
Route::post('izin/IzinUsahaPasarTradisional/store','IzinUsahaPasarTradisionalController@store');
Route::post('izin/IzinTandaPendaftaranWaralaba/store','TandaPendaftaranWaralabaController@store');

/* Admin: Download File */
Route::get('Admin/izin/IzinUsahaPusatPerbelanjaan/{id}/Download', 'IzinTempatPenjualanMinumanBeralkoholController@downloadFile');
Route::get('Admin/izin/IzinTempatPenjualanMinumanBeralkohol/{id}/Download', 'IzinUsahaPasarTradisionalController@downloadFile');
Route::get('Admin/izin/IzinUsahaTokoModern/{id}/Download', 'IzinUsahaPusatPerbelanjaanController@downloadFile');
Route::get('Admin/izin/IzinUsahaPasarTradisional/{id}/Download', 'IzinUsahaTokoModernController@downloadFile');
Route::get('Admin/izin/TandaPendaftaranWaralaba/{id}/Download', 'TandaPendaftaranWaralabaController@downloadFile');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*
Route::resource('Izin','IzinController');

Route::resource('IzinTempatPenjualanMinumanBeralkohol','IzinTempatPenjualanMinumanBeralkoholController');
Route::resource('IzinUsahaPasarTradisional','IzinUsahaPasarTradisionalController');
Route::resource('IzinUsahaPusatPerbelanjaan','IzinUsahaPusatPerbelanjaanController');
Route::resource('IzinUsahaTokoModern','IzinUsahaTokoModernController');
Route::resource('Pengguna','PenggunaController');
Route::resource('TandaPendaftaranWaralaba','TandaPendaftaranWaralabaController'); */

