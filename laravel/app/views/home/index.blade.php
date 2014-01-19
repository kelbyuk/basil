@extends('layout.base')

@section('head')
<title>My Moggy UK's lost and found cats. :: homepage</title>

@stop

@section('main')
<div id="homepage_lost" class="homepage_catblock">
	<h3>Lost cats</h3>
	<?php 
	
	foreach($lost as $incident) { ?>
	
	{{$incident->cat->name}}<br />
	
	<?php } ?>

</div>
<div id="homepage_found" class="homepage_catblock">
	<h3>Found cats</h3>
</div>
<div id="homepage_safe" class="homepage_catblock">
	<h3>Safe cats</h3>
	<?php 
	
	foreach($safe as $incident) { ?>
	
	{{$incident->cat->name}}<br />
	
	<?php } ?>
</div>

@stop

@section('footer')
<br />


	Footer goes here

@stop
