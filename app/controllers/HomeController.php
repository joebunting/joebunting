<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
	
		$html = new DOMDocument();
		@$html->loadHtmlFile('http://graphical.weather.gov/xml/sample_products/browser_interface/ndfdXMLclient.php?lat=34.445&lon=-119.625833&product=time-series&appt=appt');
		$xpath = new DOMXPath( $html );
		$nodelist = $xpath->query( "//value[1]" );
		foreach ($nodelist as $n){
		$temp = $n->nodeValue."\n";
		}
		
		$theLandmarks = array('the Torrey Pine', 'the Bluffs', 'the Seal Estuary');
		return View::make('hello', array('theLocation' => 'Santa Barbara', 'temp' => $temp, 'theLandmarks' => $theLandmarks))
		->withTitle('Welcome to Joe Bunting');
	}
	
	public function signup()
	{
		return View::make('signup');
	}
	
	

}
