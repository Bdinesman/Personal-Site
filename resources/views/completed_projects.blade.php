@extends('layouts.master')
@section('content')
<style>
	body{
		background:#A7DBD8;
	}
	h3{
		background:#E0E4CC;
		font-weight: bold;
	}
</style>
<div class="container">
<div class="row">
	<div class="card blue">
	<h3 class="center">Projects</h3>
		<div class="card hoverable col s12 m12 l12">
			<span class="card-title">GalapaGo</span>
			<div class="card-image">
				<iframe class="col m12" style="height:400px;" src="http://galapago.org"></iframe>
			</div>
			<div class="card-content"><p>GalapaGo is a web platform that diminishes the amount of time patients spend in the waiting room by allowing users to fill out preliminary paperwork early. Doctors that are subscribed to Galapago can not only develop their own custom forms to send to patients, but can also review patient statistics in an easy to read format. GalapaGo was built using the Laravel framework and visuals were developed using Boostrap.</p>
			</div>
			<div class="card-action">
				<a href="http://galapago.dev">Visit</a>
			</div>
		</div>
		<div class="card hoverable col s12 m12 l12">
			<span class="card-title">RKO</span>
			<div class="card-content"><p>Under Construction</p>
			</div>
			<div class="card-action">
				<a href="">Visit</a>
			</div>
		</div>
		<div class="card hoverable col s12 m12 l12">
			<span class="card-title">Fantasy Costoco</span>
			<div class="card-image">
				<iframe class="col m12" style="height:400px;" src="http://fantasycostco.com"></iframe>
			</div>
			<div class="card-content"><p>Fantasy Costco is an online, RPG themed store, where users can use in-site currency to purchase fantasy items inspired by The Adventure Zone, Dungeons & Dragons, and other table-top franchises. The site was developed using custom CSS and a built-from-scratch PHP framework.</p>
			</div>
			<div class="card-action">
				<a href="http://fantasycostco.com">Visit</a>
			</div>
		</div>
		<div class="card hoverable col s12 m12 l12">
			<span class="card-title">Simple Simon</span>
			<div class="card-image">
				<iframe class="col m12" style="height:400px;" src="/projects/simple_simon"></iframe>
			</div>
			<div class="card-content"><p>Based of the game Memory, this responsive website tests one’s ability to match a succession of notes from a song that is procedurally generated in real-time. jQuery was used for the animation and logic of Simple Simon and all the styling was done in CSS.</p>
			</div>
			<div class="card-action">
				<a href="/projects/simple_simon">Visit</a>
			</div>
		</div>
		<div class="card hoverable col s12 m12 l12">
			<span class="card-title">Weather Map</span>
			<div class="card-image">
				<iframe class="col m12" style="height:400px;" src="/projects/weather_map"></iframe>
			</div>
			<div class="card-content"><p>
				Determine the 3-day forecast for any place on Earth with just a single click! Created using a combination of jQuery, GoogleMaps API, and WeatherReport API.
			</p>
			</div>
			<div class="card-action">
				<a href="/projects/weather_map">Visit</a>
			</div>
		</div>
</div>
</div>
</div>
@stop