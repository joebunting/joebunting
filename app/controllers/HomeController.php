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

	public function showHome()
	{
		
		$chooser = rand(1,2);
		$theLocation = 'Santa Barbara';
		if ($chooser == 1) {
			$html = new DOMDocument();
			@$html->loadHtmlFile('http://graphical.weather.gov/xml/sample_products/browser_interface/ndfdXMLclient.php?lat=34.445&lon=-119.625833&product=time-series&appt=appt');
			$xpath = new DOMXPath( $html );
			$nodelist = $xpath->query( "//value[1]" );
			foreach ($nodelist as $n){
			$temp = $n->nodeValue."\n";
			}
			if ($temp > 60 & $temp < 90) {
				$msg = 'It\'s a beautiful day.';
			} elseif ($temp > 91 or $temp < 40) {
				$msg = 'Stay inside. It\s'.$temp.'º out!';
			} elseif ($temp > 41 & $temp < 59) {
				$msg = 'It\'s a bit chilly. Might want to bring a sweater.';
			}
		} else {
			$html = new DOMDocument();	@$html->loadHtmlFile('https://www.goodreads.com/quotes/list/6055692');
			$xpath = new DOMXPath( $html );
			$nodelist = $xpath->query( "//div[@class='quoteText']" );
			$a = $nodelist->length;
			$rand = rand(1, $a);
			$nodelist = $xpath->query( "//li[".$rand."]/div[@class='quoteText']" );
			foreach ($nodelist as $n){
			$msg = $n->nodeValue."\n";
			}
			}
		
		return View::make('distributor')->with('msg',$msg);
	}

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
		
		return View::make('hello');
	}
	
	
	public function signup()
	{
		return View::make('signup');
	}
	
	

}
