@extends('layouts.master')
@section('content')
	<title>Weather Map</title>

	  <style>
	  body{
  			background-color:black;
  		}
  		#header{
			height:100px;
			margin-top:0;
			margin-bottom:30px;
  		}
  		#forecast-div .card{
			height:400px;
			padding-left:0px;
			padding-right:0px;
			margin-bottom:30px;
			font-size:1.5rem
  		}
  		#maps{
  			height:500px;
  			margin-bottom:15px;
  			margin-top:0px;
  		}
  		.margin-top-0{
			margin-top:0
  		}
  		.margin-bottom-0{
  			margin-bottom:0;
  		}
  		.card h3{
			margin:0;
			position:relative;
			width:100%
  		}
  		.row h3{
  			margin-bottom:0;
  		}
  		.day{
			height:400px;
			margin:0px
  		}
  		.btn{
  			color:black;
  			margin-top:10px;
  		}
  	</style>
<div class='header blue' id="header"><h1 class="margin-top-0">Weather App</h1></div>
<div class="container">
<div class="row" id="forecast-div">
<!--Start of First CArd-->
		<div class="card col m12 s12 blue lighten-4">
  	    	<h3 class="green lighten-1">3 Day Forecast <span id="location"></span></h3>
	  	    <div class="col m4 card-panel blue lighten-4 center-align day" id="day1"></div>
	  	    <div class="col m4 card-panel blue lighten-3 center-align day" id="day2" ></div>
	  	    <div class="col m4 card-panel blue lighten-4 center-align day" id="day3"></div>
  	  	</div>
<!--End of First CArd-->
</div>
<!--Start of Second CArd-->
<div class="row" style="margin-top:30px">
		<h3 class="purple lighten-1 col m12  margin-bottom-0">Click To Get Forecast</h3>
		<div id='maps' class="col m12 s12"></div>
<!--End of Second Card-->
		</div>
	</div>
</div>
</div>

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnGfu601TNqd0oIO9SciVvoPJZ8s5rXpc"></script>
	    <script>
	    $(document).ready(
	    	function (){
	    	var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
			var days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
	    	var lat;
	    	var lng;
	    	var geocoder = new google.maps.Geocoder();
	    	var address = '9800 Airport Blvd, San Antonio, TX 78216';
	    	var mapOptions={
	    		zoom:3,
	    		center:{
	    			lat:39.8282,
	    			lng:-98.5795
	    		}
	    	};
	    	var maps = new google.maps.Map(document.getElementById('maps'),mapOptions);
	    	var marker = new google.maps.Marker({
	    			position:{
	    				lat:39.8282,
	    				lng:-98.5795
	    			},
	    			map:maps
	    	});	
	    	$('#forecast-div').hide();
	    	marker.setDraggable(true);
	    	marker.setVisible(false);
	    	maps.addListener('click',function(event){
	    		lat = event.latLng.lat();
	    		lng = event.latLng.lng();
	    		marker.setVisible(true);
	    		marker.setPosition({
	    			lat:lat,
	    			lng:lng
	    		});
	    		getWeatherData();
	    	});
	    	marker.addListener('dragend',function(event){
	    		lat = event.latLng.lat();
	    		lng = event.latLng.lng();
	    		marker.setVisible(true);
	    		marker.setPosition({
	    			lat:lat,
	    			lng:lng
	    		});
	    		getWeatherData();
	    	})
	    //
	    //Weather data is in UTC, so need to correct to get the proper day
	    function correctForLocalTime(date){
	    	var day = date.getDate();
	    	var offset =date.getTimezoneOffset();
	    	var correctDate=new Date (date.getTime()-offset);
	    	return correctDate;
	    }
	    function nextDay(date){
	    	var nextDay = new Date(date.setDate(date.getDate()+1));
	    	date = nextDay;
	    	return date;
	    };
	    function getWeatherData(){
	    	var sky=[];
	    	var date = new Date ();
	    	date=correctForLocalTime(date);
			var currentMonth = date.getMonth();
			var currentDay = date.getDate();
			var currentDayOfWeek=date.getDay();
			var currentYear = date.getFullYear();
			$('#backgroundContainer').show();
			$.get("http://api.openweathermap.org/data/2.5/forecast", {
    			APPID: '3f029140e5eea508943b79987f149a50',
    			lon:lng,
    			lat:lat,  
       			units: "imperial"
				}).done(function(data) {
					//Converts cloud data into a format of overcast/cloudy/sunny
					console.log(data);
					for(var i=0;i<3;i++){
						if(data.list[i*8].clouds.all>=90){
							sky.push("Overcast");
						}else if(data.list[i*8].clouds.all>=70 && data.list[i*8].clouds.all<90){
							sky.push('Mostly Cloudy');
						}else if(data.list[i*8].clouds.all>=30 && data.list[i*8].clouds.all<70){
							sky.push('Partly Cloudy');
						}else if (data.list[i*8].clouds.all>=10 && data.list[i*8].clouds.all<30){
							sky.push('Mostly clear');
						}else if (data.list[i*8].clouds.all<10){
							sky.push('Clear');
						}
					};
					$('forecast-div').show($('#forecast-div').slideDown(3000));
					$('#location').html("for " +  data.city.name + ', ' + data.city.country);
    				$('#day1').html('<strong>' + days[currentDayOfWeek-1] + '</strong><br><strong>' + months[currentMonth] + ' ' + currentDay + ', ' + currentYear + '<br><img src="http://openweathermap.org/img/w/' + data.list[0].weather[0].icon + '.png"></strong></br><strong>' + sky[0] + '</strong><br><strong>Current Temp:</strong>' + data.list[0].main.temp + '&#176F<br><strong>High:</strong>' + data.list[0].main.temp_max  + '&#176F<br><strong>Low:</strong>' + data.list[0].main.temp_min +'&#176F<br><strong>Humidity:</strong> ' + data.list[0].main.humidity + '%<br><strong>Wind:</strong> ' + data.list[0].wind.speed + 'mph');
    				$('#day2').html('<strong>' + days[date.getDay()] + '</strong><br><strong>' + months[date.getMonth()] + ' ' + date.getDate() + ', ' + date.getFullYear() + '</strong></br><img src="http://openweathermap.org/img/w/' + data.list[8].weather[0].icon + '.png"><br><strong>' + sky[1] + '</strong><br><strong>Current Temp:</strong>' + data.list[8].main.temp + '&#176F<br><strong>High:</strong>' + data.list[8].main.temp_max  + '&#176F<br><strong>Low:</strong>' + data.list[8].main.temp_min +'&#176F<br><strong>Humidity:</strong> ' + data.list[8].main.humidity + '%<br><strong>Wind:</strong> ' + data.list[8].wind.speed + 'mph');
    				nextDay(date);
    				$('#day3').html('<strong>' + days[date.getDay()] + '</strong><br><strong>' + months[date.getMonth()] + ' ' + date.getDate() + ', ' + date.getFullYear() + '</strong><br><img src="http://openweathermap.org/img/w/' + data.list[16].weather[0].icon + '.png"><br><strong>' + sky[2] + '</strong><br><strong>Current Temp:</strong>' + data.list[16].main.temp + '&#176F<br><strong>High:</strong>' + data.list[16].main.temp_max  + '&#176F<br><strong>Low:</strong>' + data.list[16].main.temp_min +'&#176F<br><strong>Humidity:</strong> ' + data.list[16].main.humidity + '%<br><strong>Wind:</strong> ' + data.list[16].wind.speed + 'mph');
			});
			}});
	    </script>
@stop