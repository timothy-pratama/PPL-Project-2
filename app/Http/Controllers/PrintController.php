<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\PDF;
use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;
use Input;
use App\database;

class PrintController extends Controller 
{
    public function index()
    {
        $pdf = App::make('dompdf');
        $pdf->loadHTML('<h1>Hello World!!</h1>');
        return $pdf->stream();
    }
}