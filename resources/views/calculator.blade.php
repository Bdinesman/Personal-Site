<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator</title>
	<link rel="stylesheet" href="/css/calculator.css">
</head>
<body>
	<div id='calcBody'>
		<div id='textAreaDiv' disabled draggable>
			<div id='display' disabled=""></div>
		</div>
		<div>
			<div class="button number" id='1' value=1>1</div>
			<div class="button number" id='2' value=2>2</div>
			<div class="button number" id='3' value=3>3</div>
			<div class="button operator" id='+' value='+'>+</div>
			<div class="button number" id='4' value=4  class="clear-both">4</div>
			<div class="button number" id='5'value=5>5</div>
			<div class="button number" id='6'value=6>6</div>
			<div class="button operator" id='-' value='-'>-</div>
			<div class="button number" id='7' value=7  class="clear-both">7</div>
			<div class="button number" id='8' value=8>8</div>
			<div class="button number" id='9' value=9>9</div>
			<div class="button operator" id='.' value='.'>.</div>
			<div class="button operator" id='x' value='x' class="clear-both">x</div>
			<div class="button number" id='0' value=0>0</div>
			<div class="button operator" id='c' value='c'>C</div>
			<div class="button operator" id='='value='Enter'>=</div>
			<div class="button clear-both operator" id='!'value='!'>!</div>
			<div class="button operator" id='changesign'value='-1'>+/-</div>
			<div class="button operator" id='('value='('>(</div>
			<div class="button operator" id=')'value=')'>)</div>
		<div>
	</div>
	<script   
	src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script> 
	<script src="/js/calculator.js"></script>
</body>
</html>