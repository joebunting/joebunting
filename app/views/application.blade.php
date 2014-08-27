<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>
		{{ $title or 'Welcome to Joe Bunting' }}
	</title>
	<meta name="description" content="Joe Bunting">
	<link href="/assets/application.css" type="text/css" rel="stylesheet">
	<link rel="Shortcut Icon" href="/assets/images/favicon.ico" type="image/x-icon" />
</head>
<body class="{{$bodyClass or ''}}">
	<div id="wrap">
	
	@yield('content')
	</div>
<noscript>
	<div id="noscript"><h3>You must enable JavaScript to view Joe Bunting</h3><p>We use the latest and greatest technology available to provide the best possible web experience.<br />Please enable JavaScript in your browser settings to continue.</p></div>
</noscript>
 
</body>
</html>
