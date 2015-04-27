<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\PDF;
use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;
use Input;
use App\database;

class SuratIzinController extends Controller 
{
    public function index()
    {
    	$pdf = App::make('dompdf');
        $pdf->loadView('SuratIzin')->setPaper('a4')->setOrientation('portrait')->setWarnings(false)->save('myfile.pdf');
        return $pdf->stream();
    }
}