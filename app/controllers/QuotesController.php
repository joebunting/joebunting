<?php

class QuotesController extends BaseController {

	public function quotes()
	{
		$html = new DOMDocument();	@$html->loadHtmlFile('https://www.goodreads.com/quotes/list/6055692');
		$xpath = new DOMXPath( $html );
		$nodelist = $xpath->query( "//div[@class='quoteText']" );
		$a = $nodelist->length;
		$rand = rand(1, $a);
		$nodelist = $xpath->query( "//li[".$rand."]/div[@class='quoteText']" );
		foreach ($nodelist as $n){
		$theQuote = $n->nodeValue."\n";
	}

		return View::make('quotes', array('theQuote' => $theQuote))
		->withTitle('Joe Bunting\'s favorite quote is...');
	}
	


}
