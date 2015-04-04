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

Route::get('izin', 'IzinController@user');
Route::get('izin/IzinTempatPenjualanMinumanBeralkohol', 'IzinTempatPenjualanMinumanBeralkoholController@user');
Route::get('izin/IzinUsahaPasarTradisional', 'IzinUsahaPasarTradisionalController@user');
Route::get('izin/IzinUsahaPusatPerbelanjaan', 'IzinUsahaPusatPerbelanjaanController@user');
Route::get('izin/IzinUsahaTokoModern', 'IzinUsahaTokoModernController@user');
Route::get('izin/TandaPendaftaranWaralaba', 'TandaPendaftaranWaralabaController@user');

Route::get('Admin/izin', 'IzinController@admin');
Route::get('Admin/izin/IzinTempatPenjualanMinumanBeralkohol', 'IzinTempatPenjualanMinumanBeralkoholController@admin');
Route::get('Admin/izin/IzinUsahaPasarTradisional', 'IzinUsahaPasarTradisionalController@admin');
Route::get('Admin/izin/IzinUsahaPusatPerbelanjaan', 'IzinUsahaPusatPerbelanjaanController@admin');
Route::get('Admin/izin/IzinUsahaTokoModern', 'IzinUsahaTokoModernController@admin');
Route::get('Admin/izin/TandaPendaftaranWaralaba', 'TandaPendaftaranWaralabaController@admin');


Route::post('izin/IzinUsahaPusatPerbelanjaan/store','IzinUsahaPusatPerbelanjaanController@store');

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

