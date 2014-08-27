@extends('application')

@section('content')
	<div class="welcome">
		<a href="http://joebunting.com"><img src="https://s3.amazonaws.com/jhbfiles/Joe+Bunting-headshot.jpg"></a>
		<h1>Joe Bunting has arrived in {{$theLocation}} <br> on {{ date ('M d, Y')}}.</h1>
		@if($temp > 60 & $temp < 90 )
		<p>It's a beautiful day.</p>
		@elseif($temp > 100 or $temp < 40)
		<p>Stay inside. It's {{$temp}}º out!</p>
		@elseif($temp > 41 & $temp < 59)
		<p>It's a bit chilly. Might want to bring a sweater.</p>
		@else
		<p>No forecast available.</p>
		@endif
		</ul>
	</div>
	<div
  class="fb-like"
  data-send="true"
  data-width="450"
  data-show-faces="true">
</div>

	
	
	
@stop