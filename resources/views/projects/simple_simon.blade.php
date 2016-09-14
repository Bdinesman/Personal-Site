@extends('layouts.master')
@section('content')
	<link rel='stylesheet' type='text/css' href='/css/simonsays.css'></link>
	<audio id="Ckeysound">
		<source src="/audio/Ckey.mp3" type="audio/mpeg">
		</audio>
	<audio id="Csharpkeysound">
		<source src="/audio/Csharpkey.mp3" type="audio/mpeg">
	</audio>
	<audio id="Dkeysound">
		<source src="/audio/Dkey.mp3" type="audio/mpeg">
	</audio>
	<audio id="Ebkeysound">
		<source src="/audio/Ebkey.mp3" type="audio/mpeg">
	</audio>
	<audio id="Ekeysound">
		<source src="/audio/Ekey.mp3" type="audio/mpeg">
	</audio>
	<audio id="Fkeysound">
		<source src="/audio/Fkey.mp3" type="audio/mpeg">
	</audio>
	<audio id="Fsharpkeysound">
		<source src="/audio/Fsharpkey.mp3" type="audio/mpeg">
	</audio>
	<audio id="Gkeysound">
		<source src="/audio/Gkey.mp3" type="audio/mpeg">
	</audio>
	<audio id="Abkeysound">
		<source src="/audio/Abkey.mp3" type="audio/mpeg">
	</audio>
	<audio id="Akeysound">
		<source src="/audio/Akey.mp3" type="audio/mpeg">
	</audio>
	<audio id="Bbkeysound">
		<source src="/audio/Bbkey.mp3" type="audio/mpeg">
	</audio>
	<audio id="Bkeysound">
		<source src="/audio/Bkey.mp3" type="audio/mpeg">
	</audio>
	<audio id="Ckey2sound">
		<source src="/audio/Ckey2.mp3" type="audio/mpeg">
	</audio>
	<audio id="Csharpkey2sound">
		<source src="/audio/Csharpkey2.mp3" type="audio/mpeg">
	</audio>
	<audio id="Dkey2sound">
		<source src="/audio/Dkey2.mp3" type="audio/mpeg">
	</audio>
	<audio id="Ebkey2sound">
		<source src="/audio/Ebkey2.mp3" type="audio/mpeg">
	</audio>
	<audio id="Ekey2sound">
		<source src="/audio/Ekey2.mp3" type="audio/mpeg">
	</audio>
	<audio id="Fkey2sound">
		<source src="/audio/Fkey2.mp3" type="audio/mpeg">
	</audio>
	<audio id="Fsharpkey2sound">
		<source src="/audio/Fsharpkey2.mp3" type="audio/mpeg">
	</audio>
	<audio id="Gkey2sound">
		<source src="/audio/Gkey2.mp3" type="audio/mpeg">
	</audio>
	<audio id="Abkey2sound">
		<source src="/audio/Abkey2.mp3" type="audio/mpeg">
	</audio>
	<audio id="Akey2sound">
		<source src="/audio/Akey2.mp3" type="audio/mpeg">
	</audio>
	<audio id="Bbkey2sound">
		<source src="/audio/Bbkey2.mp3" type="audio/mpeg">
	</audio>
	<audio id="Bkey2sound">
		<source src="/audio/Bkey2.mp3" type="audio/mpeg">
	</audio>
	<audio id="Ckey3sound">
		<source src="/audio/Ckey3.mp3" type="audio/mpeg">
	</audio>
	<audio id="Csharpkey3sound">
		<source src="/audio/Csharpkey3.mp3" type="audio/mpeg">
	</audio>
	<audio id="Dkey3sound">
		<source src="/audio/Dkey3.mp3" type="audio/mpeg">
	</audio>
	<audio id="Ebkey3sound">
		<source src="/audio/Ebkey3.mp3" type="audio/mpeg">
	</audio>
	<audio id="Ekey3sound">
		<source src="/audio/Ekey3.mp3" type="audio/mpeg">
	</audio>
	<audio id="Fkey3sound">
		<source src="/audio/Fkey3.mp3" type="audio/mpeg">
	</audio>
	<audio id="Fsharpkey3sound">
		<source src="/audio/Fsharpkey3.mp3" type="audio/mpeg">
	</audio>
	<audio id="Gkey3sound">
		<source src="/audio/Gkey3.mp3" type="audio/mpeg">
	</audio>
	<audio id="Abkey3sound">
		<source src="/audio/Abkey3.mp3" type="audio/mpeg">
	</audio>
	<audio id="Akey3sound">
		<source src="/audio/Akey3.mp3" type="audio/mpeg">
	</audio>
	<audio id="Bbkey3sound">
		<source src="/audio/Bbkey3.mp3" type="audio/mpeg">
	</audio>
	<audio id="Bkey3sound">
		<source src="/audio/Bkey3.mp3" type="audio/mpeg">
	</audio>
	<div id=container class="container">
	<h1>Simple Simon</h1>
	<div id='pianoBody'>
		<div id='logo-box'></div>
		<div id="left-box"></div>
		<div id='top-box'>
		</div>
		<div id='keys'>
			<div id='Ckey'  class="keywhite key C"  accessKey='0'></div>
			<div id='Csharpkey'  class="keyblack key H" accessKey='1'></div>
			<div id='Dkey'  class="keywhite key D"  accessKey='2'></div>
			<div id='Ebkey'  class="keyblack key" accessKey='3'></div>
			<div id='Ekey'  class="keywhite key E"  accessKey='4'></div>
			<div id='Fkey'  class="keywhite key F"  accessKey='5'></div>
			<div id='Fsharpkey'  class="keyblack key H" accessKey='6'></div>
			<div id='Gkey'  class="keywhite key G" accessKey='7'></div>
			<div id='Abkey'  class="keyblack key H" accessKey='8'></div>
			<div id='Akey'  class="keywhite key A"  accessKey='9'></div>
			<div id='Bbkey'  class="keyblack key H" accessKey='10'></div>
			<div id='Bkey'  class="keywhite key B"  accessKey='11'></div>
			<div id='Ckey2'  class="keywhite key C" accessKey='12'></div>
			<div id='Csharpkey2'  class="keyblack key H" accessKey='13'></div>
			<div id='Dkey2'  class="keywhite key D" accessKey='14'></div>
			<div id='Ebkey2'  class="keyblack key H" accessKey=''15></div>
			<div id='Ekey2'  class="keywhite key E" accessKey='16'></div>
			<div id='Fkey2'  class="keywhite key F" accessKey='17'></div>
			<div id='Fsharpkey2'  class="keyblack key H" accessKey='18'></div>
			<div id='Gkey2'  class="keywhite key G" accessKey='19'></div>
			<div id='Abkey2'  class="keyblack key H" accessKey='20'></div>
			<div id='Akey2'  class="keywhite key A" accessKey='21'></div>
			<div id='Bbkey2'  class="keyblack key H" accessKey='22'></div>
			<div id='Bkey2'  class="keywhite key B" accessKey='23'></div>
			<div id='Ckey3'  class="keywhite key C" accessKey='24'></div>
			<div id='Csharpkey3'  class="keyblack key H" accessKey='25'></div>
			<div id='Dkey3'  class="keywhite key D" accessKey='26'></div>
			<div id='Ebkey3'  class="keyblack key H" accessKey='27'></div>
			<div id='Ekey3'  class="keywhite key E" accessKey='28'></div>
			<div id='Fkey3'  class="keywhite key F" accessKey='29'></div>
			<div id='Fsharpkey3'  class="keyblack key H" accessKey='30'></div>
			<div id='Gkey3'  class="keywhite key G" accessKey='31'></div>
			<div id='Abkey3'  class="keyblack key H" accessKey='32'></div>
			<div id='Akey3'  class="keywhite key A" accessKey='33'></div>
			<div id='Bbkey3'  class="keyblack key H" accessKey='34'></div>
			<div id='Bkey3'  class="keywhite key B" accessKey='35'></div>
		</div>
		<div id='bottomBar'></div>
		<div id="right-box"></div>
	</div>
	</div>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src='/js/simonsays.js'></script>
	<script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile"></script>
@stop