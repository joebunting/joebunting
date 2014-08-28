<?php	
	
/*Test1------------------------------------------*/

echo '<p><strong>Test #1</strong></p>';
	
	$html = new DOMDocument();	@$html->loadHtmlFile('https://www.goodreads.com/quotes/list/6055692');
	$xpath = new DOMXPath( $html );
	$nodelist = $xpath->query( "//div[@class='quoteText']" );
	foreach ($nodelist as $n){
	echo $n->nodeValue."\n";
	}
		
		
/*Test2------------------------------------------*/

echo '<p><strong>Test #2</strong></p>';

echo '<p>This gets a random quote from the list. So cool! In the next test, we\'ll need to set up the random # generator so that we create an appropriate range.</p>';

	$rand = rand(1, 15);	
	$html = new DOMDocument();	@$html->loadHtmlFile('https://www.goodreads.com/quotes/list/6055692');
	$xpath = new DOMXPath( $html );
	$nodelist = $xpath->query( "//li[".$rand."]/div[@class='quoteText']" );
	foreach ($nodelist as $n){
	echo $n->nodeValue."\n";
	}
	
/*Test3------------------------------------------*/

echo '<p><strong>Test #3</strong></p>';

echo '<p>We did it!</p>';

	$html = new DOMDocument();	@$html->loadHtmlFile('https://www.goodreads.com/quotes/list/6055692');
	$xpath = new DOMXPath( $html );
	$nodelist = $xpath->query( "//div[@class='quoteText']" );
	$a = $nodelist->length;
	$rand = rand(1, $a);
	$nodelist = $xpath->query( "//li[".$rand."]/div[@class='quoteText']" );
	foreach ($nodelist as $n){
	echo $n->nodeValue."\n";
	}
	
	

		