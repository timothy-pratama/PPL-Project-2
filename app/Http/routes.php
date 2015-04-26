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
Route::get('/', ['uses'=>'LoginController@login','as'=>'login']);
Route::get('/Form_Login',['uses'=>'LoginController@login_admin','as'=>'login_admin_1']);
Route::get('/Admin',['uses'=>'LoginController@login_admin_1','as'=>'login_admin']);

Route::get('izin/logout',['uses'=>'LoginController@logout','as'=>'logout']);
Route::get('izin/logout_admin',['uses'=>'LoginController@logout_admin','as'=>'logout_admin']);

Route::get('home', 'HomeController@index');

/* User Routing */
Route::get('izin', ['uses'=>'IzinController@user','as'=>'userhome']);
Route::get('izin/IzinTempatPenjualanMinumanBeralkohol', 'IzinTempatPenjualanMinumanBeralkoholController@user');
Route::get('izin/IzinUsahaPasarTradisional', 'IzinUsahaPasarTradisionalController@user');
Route::get('izin/IzinUsahaPusatPerbelanjaan', 'IzinUsahaPusatPerbelanjaanController@user');
Route::get('izin/IzinUsahaTokoModern', 'IzinUsahaTokoModernController@user');
Route::get('izin/TandaPendaftaranWaralaba', 'TandaPendaftaranWaralabaController@user');

/* Admin Routing */
Route::get('Admin/izin', ['uses'=>'IzinController@admin', 'as'=>'adminhome']);
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

/* Single Sign On */
Route::get('/login_callback',['uses'=>'LoginController@call_back','as'=>'login_callback']);
Route::get('/login_callback_admin',['uses'=>'LoginController@call_back_admin','as'=>'login_callback_admin']);
Route::get('/login_callback_admin1',['uses'=>'LoginController@call_back_admin1','as'=>'login_callback_admin1']);