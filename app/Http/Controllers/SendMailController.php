<?php namespace App\Http\Controllers;
use Mail;

class SendMailController extends Controller 
{
    public function index()
    {
       Mail::send('linkizin', [], function($message)
		{
			$message->to('riadysastrak@gmail.com', 'lalala')->subject( "Nyobain" );
		});
    }
	
	public function getLink(){
		return view("linkizin");
	}
}