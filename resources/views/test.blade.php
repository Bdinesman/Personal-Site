@extends('layouts.master')
@section('content')
<style>
  .mobile{
    display:none;
  }
  @media (min-width:600px) and (orientation:portrait){
    .mobile{
      display:block;
      text-align: center;
    }
    .carousel-item{
      background-repeat:no-repeat;
    }
    .row:nth-child(odd){
      background-color:#69D2E7;
    }
    .FA6900{
      background-color:#FA6900;
    }
  }
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
  <div class="mobile">
    <div class="row">
      <div class="col s6 FA6900">
        <a href="/about"><i class="icon large material-icons">info_outline</i>
        <h1 class="white-text center bottom">About</h1></a>
      </div>
      <div class="col s6">
        <a href="http://galapago.org"><i class="icon large material-icons">alarm_on</i>
        <h1 class="white-text center bottom">Recent Project</h1></a>
      </div>
      <div class="col s6 ">
        <a href="/projects"><i class="icon large material-icons">subject</i>
        <h1 class="white-text center bottom">Other Projects</h1></a>
      </div>
      <div class="col s6 FA6900">
        <a href="https://github.com/Bdinesman"><i class="icon large material-icons">device_hub</i>
        <h1 class="white-text center bottom">GitHub</h1></a>
      </div>
    </div>
  </div>
  <script>
    $('.carousel.carousel-slider').carousel({full_width: true});
    setInterval(function(){
        $('.carousel').carousel('next');
    },5000)
    var height=$(window).height()-$('nav').height();
    var width=$(window).width();
    if($('.mobile').css('display')=='block'){
      displayForMobile();
    }
    var contentContainerHeight = $('.center').parents('.s6').first().height();
    $('.bottom').css('position','relative');
    var adjust=contentContainerHeight - $('.bottom').first().height() - $('i');
    $('.bottom').css('top',adjust);
    $('.bottom').css('margin',0);
    $(window).resize(function(){
      var width=$(window).width();
      $('.carousel').width(width);
      $('.carousel-item').width(width);
    });
    function displayForMobile(){
      var width=$(window).width();
      $('.carousel').width(width);
      $('.carousel-item').width(width);
          $('.carousel').height(height/2);
      $('.col.s6').height(height/4);
      $('.large').css('font-size','22rem');
    }
  </script>
 @stop