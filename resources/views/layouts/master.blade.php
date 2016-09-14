<!DOCTYPE html>
<html>
    <head>
        <title>Foxglove Studios</title>
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<script   src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script> 
<style>
            .logo{
                position:relative;
                width:50px;
                top:10px;
            }
            nav{
                background-color:#F38630;
            }
            body{
                background-color:#A7DBD8;
            }
            /*Carousel*/
            #slider{
                position:relative;
                width:100%;
                height:400px;
                overflow:hidden;
                border:1px solid black;
            }
            #slider .slides{
                position:relative;
                display:block;
                width:400%;
                height:400px;
                margin:0;
                padding:0;
            }
            #slider .slide{
                position:relative;
                float:left;
                list-style-type:none;
                width:25%;
                height:400px;
            }
            /*Options Bar*/
            #options{
                position:relative;
                font-size: 3rem;
                font-weight: bold;
                width:100%;
                height:50%;
                display:flex;
                flex-direction:row;
                min-height:400px;
            }
            .option{
                position: relative;
                height:80%;
                width:33.33%;
                float:left;
                padding-top:40px;
                padding:15px;
                text-align: center;
                min-width:400px;
            }
            .option img{
                position:relative;
                display:block;
                width:50%;
                vertical-align: middle;
                align-content: center;
                left:25%;
                margin-bottom:10px;
            }
            span{
                position:relative;
                clear:both;
                vertical-align: middle;
            }
            @media(max-width: 360px){
            /*Carousel*/
            #slider{
                width:1200px;
                height:800px;
            }
            #slider .slides{
                width:400%;
                height:800px;
            }
            #slider .slide{
                width:25%;
                height:800px;
            }
            #options{
                vertical-align: middle;
                position:relative;
                font-size: 3rem;
                font-weight: bold;
                width:100%;
                height:50%;
                display:flex;
                flex-direction:column;
                min-height:400px;
            }
            .option{
                position: relative;
                height:80%;
                width:100%;
                float:left;
                padding-top:40px;
                padding:15px;
                text-align: center;
                min-width:400px;
            }
            .option img{
                position:relative;
                display:block;
                width:50%;
                vertical-align: middle;
                align-content: center;
                left:25%;
                margin-bottom:10px;
            }
            }
        </style>
    </head>
    <body>
      <nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo"><img src="/foxgloveicon.png" class="logo"> Foxglove Studios</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/projects">Projects</a></li>
        <li><a href="">Resume</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="https://www.linkedin.com/in/brandon-dinesman">LinkedIn</a></li>
        <li><a href="https://github.com/Bdinesman">Github</a></li>
      </ul>
    </div>
  </nav>
    @yield('content')
        <script>
            'use strict';
            //Configuration
            var width;
            var animationSpeed=1000;
            var pause=3000;
            //DOM
            var $slider=$('#slider');
            var $sliderContainer=$slider.find('.slides');
            var $slides=$sliderContainer.find('.slide');
            var currentSlide=1;
            var interval;
            function startSlider(){
            interval=setInterval(function(){
                $sliderContainer.animate({'margin-left':'-=100%'},animationSpeed,function(){
                    currentSlide++;
                    if(currentSlide==$slides.length){
                        currentSlide=1;
                        $sliderContainer.css('margin-left','0');
                    }
                }

                    );
            },pause)
        }
        function stopSlider(){
            clearInterval(interval);
        }
        startSlider();
        $slider.on('mouseenter', stopSlider).on('mouseleave',startSlider);
        </script>
    </body>
</html>
<!--#6CCE0D
6AEC00-->   