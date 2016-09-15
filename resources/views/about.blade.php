@extends('layouts.master')
@section('content')
<style>
	body{
		background:#A7DBD8;
	}
</style>
<div class="container">
	<h1>Our Team</h1>
	<div style="background:#E0E4CC;" class="card row">
			<span class="card-title">
			<h2 style="background-color:#FA6900">Brandon Dinesman</h2></span>
			<div class="col m3">
				<img src="/img/brandondinesman.jpg">
			</div>
			<div class="col m9">
				<p ><h5 style="font-weight:bolder;font-size:2rem ">Full stack developer with expertise in Javascript, jQuery, PHP, Laravel, MySQL, CSS, and HTML</h5></p> 
				<p style="font-weight:bolder;font-size:1.5rem ">Brandon's background in biology and time spent teaching has fostered a deep passion for solving problems and learning new things. Currently, Brandon is learning to code in Java, and plans on learning many other languages down the line, including C++ and .NET</p>
				<div>
				<i class="medium material-icons">email</i>
				<a href="/docs/Resume 07-29-2016.docx"><i class="medium material-icons">insert_drive_file</i></a>
				</div>
			</div>
	</div>
</div>
@stop