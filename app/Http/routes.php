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
Route::get('izin', 'IzinController@index');
Route::get('izin/IzinTempatPenjualanMinumanBeralkohol', 'IzinTempatPenjualanMinumanBeralkoholController@index');
Route::get('izin/IzinUsahaPasarTradisional', 'IzinUsahaPasarTradisionalController@index');
Route::get('izin/IzinUsahaPusatPerbelanjaan', 'IzinUsahaPusatPerbelanjaanController@index');
Route::get('izin/IzinUsahaTokoModern', 'IzinUsahaTokoModernController@index');
Route::get('izin/TandaPendaftaranWaralaba', 'TandaPendaftaranWaralabaController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('Izin','IzinController');
Route::resource('IzinTempatPenjualanMinumanBeralkohol','IzinTempatPenjualanMinumanBeralkoholController');
Route::resource('IzinUsahaPasarTradisional','IzinUsahaPasarTradisionalController');
Route::resource('IzinUsahaPusatPerbelanjaan','IzinUsahaPusatPerbelanjaanController');
Route::resource('IzinUsahaTokoModern','IzinUsahaTokoModernController');
Route::resource('Pengguna','PenggunaController');
Route::resource('TandaPendaftaranWaralaba','TandaPendaftaranWaralabaController');
