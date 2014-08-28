<?php

class TestsController extends BaseController {


public function merge()
	{
		$chooser = rand(1,2);
		echo '<p><strong>Test #1</strong></p>';
		echo $chooser;
		
		echo '<p><strong>Test #2</strong></p>';
		if ($chooser == 1) {
			$html = new DOMDocument();
			@$html->loadHtmlFile('http://graphical.weather.gov/xml/sample_products/browser_interface/ndfdXMLclient.php?lat=34.445&lon=-119.625833&product=time-series&appt=appt');
			$xpath = new DOMXPath( $html );
			$nodelist = $xpath->query( "//value[1]" );
			foreach ($nodelist as $n){
			echo $n->nodeValue."\n";
			}
		} else {
			$html = new DOMDocument();	@$html->loadHtmlFile('https://www.goodreads.com/quotes/list/6055692');
			$xpath = new DOMXPath( $html );
			$nodelist = $xpath->query( "//div[@class='quoteText']" );
			$a = $nodelist->length;
			$rand = rand(1, $a);
			$nodelist = $xpath->query( "//li[".$rand."]/div[@class='quoteText']" );
			foreach ($nodelist as $n){
			echo $n->nodeValue."\n";
			}
		}
		echo '<p><strong>Test #3</strong></p>';
		
		if ($chooser == 1) {
			$html = new DOMDocument();
			@$html->loadHtmlFile('http://graphical.weather.gov/xml/sample_products/browser_interface/ndfdXMLclient.php?lat=34.445&lon=-119.625833&product=time-series&appt=appt');
			$xpath = new DOMXPath( $html );
			$nodelist = $xpath->query( "//value[1]" );
			foreach ($nodelist as $n){
			$temp = $n->nodeValue."\n";
			}
			$temp = 50;
			if ($temp > 60 & $temp < 90) {
				echo 'It\'s a beautiful day.';
			} elseif ($temp > 91 or $temp < 40) {
				echo 'Stay inside. It\s'.$temp.'º out!';
			} elseif ($temp > 41 & $temp < 59) {
				echo 'It\'s a bit chilly. Might want to bring a sweater.';
			}
		} else {
			$html = new DOMDocument();	@$html->loadHtmlFile('https://www.goodreads.com/quotes/list/6055692');
			$xpath = new DOMXPath( $html );
			$nodelist = $xpath->query( "//div[@class='quoteText']" );
			$a = $nodelist->length;
			$rand = rand(1, $a);
			$nodelist = $xpath->query( "//li[".$rand."]/div[@class='quoteText']" );
			foreach ($nodelist as $n){
			echo $n->nodeValue."\n";
			}
		echo '<p><strong>Test #4</strong></p>';
		
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
		echo $msg;
		}
		

		return View::make('tests/merge');
		}
	}
}
	
	
	