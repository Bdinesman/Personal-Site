@extends('layouts.master')
@section('content')
<style>
</style>
  <div class="carousel carousel-slider center" style="height:670px" data-indicators="true">
    <div class="carousel-fixed-item center">
    </div>
    <div class="carousel-item white-text" style="background:url('/img/foxgloveicon.png');background-repeat:no-repeat;background-position:center;width:1440px;background-color:black" href="/about">
      <h1>About Our Team</h1>
    </div>
    <div class="carousel-item amber white-text" style="background:url('/img/galapago.png');width:1440px" href="http://galapago.org">
      <h1 style="position:relative;top:30px" id="header-2">Most Recent Project</h1>
    </div>
    <div class="carousel-item green white-text" style="background:url('/img/other-projects.png');width:1440px" href="#three!">
      <h1>Other Completed Projects</h1>
    </div>
  </div>
  <script>
    $('.carousel.carousel-slider').carousel({full_width: true});
    setInterval(function(){
        $('.carousel').carousel('next');
    },5000)
  </script>
 @stop