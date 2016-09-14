$(document).ready(function(){
var stack=[];
var operators=['*','-','+','/','!'];
var displayString='';
$(document).keypress(function(e){
		if(e.which==49){
			var input=1;
		}else if(e.which==50){
			var input=2;
		}else if(e.which==51){
			var input=3;
		}else if(e.which==52){
			var input=4;
		}else if(e.which==53){
			var input=5;
		}else if(e.which==54){
			var input=6;
		}else if(e.which==55){
			var input=7;
		}else if(e.which==56){
			var input=8;
		}else if(e.which==57){
			var input=9;
		}else if(e.which==48){
			var input=0;
		}else if(e.which==61 || e.which==13){
			var input='enter';
		}else if(e.which==45 || e.which==95){
			var input='-';
		}else if(e.which==46){
			var input='.';
		}else if(e.which==99){
			var input='c';
		}else if(e.which==61){
			var input='=';	
		}else if(e.which==43){
			var input='+';
		}else if(e.which==120 || e.which==42){
			var input='*';
		}else if(e.which==47){
			var input='/';
		}else if(e.which==33){
			var input='!';
		}
		if(typeof input != 'undefined'){
			formatInput(input);
		}
});
function formatInput(input){
	var operatorCounter=0;
	var decimalCounter=0;
	stack.forEach(function(value){
		if(isOperator(value)){
			operatorCounter++;
		}
	});
	stack.forEach(function(value){
		if(isDecimal(value)){
			decimalCounter++;
		}
	})
	if(input=='enter'){
		if(operatorCounter>0){
			calculate();
		}
	}else if(input=='c'){
		stack=[];
		$('#display').text('');
		displayString='';
	}else if(operatorCounter<1){
		if(!isDecimal(input)){
			updateDisplay(input);
		}else if(decimalCounter<1){
			updateDisplay(input);
		}
	}else if(operatorCounter>=1){
		if(!isOperator(input)){
			if(input=='!'){
				calculate();
			}
			stack.forEach(function(value){
				if(isDecimal(value)){
					decimalCounter++;
				}
			});
			if(decimalCounter<=1){
					updateDisplay(input);
			}else{
				if(!isDecimal(value)){
					updateDisplay(input);
				}
			}
		}
	}
}
function calculate(){
	var leftSide=parseFloat(displayString);
	var operator=getOperator(displayString);
	var rightSide=displayString.substring(displayString.indexOf(operator)+1,displayString.length);
	rightSide=parseFloat(rightSide);
	if(operator=='+'){
		resetData();
		updateDisplay(leftSide+rightSide);
	}else if(operator=='-'){
		resetData();
		updateDisplay(leftSide-rightSide);
	}else if(operator=='*'){
		resetData();
		updateDisplay(leftSide*rightSide);
	}else if(operator=='/'){
		if(rightSide==0){
			resetData();
			$('#display').text('Cannot divide by 0');
		}else{
			resetData();
			updateDisplay(leftSide/rightSide);
		}
	}else if(operator=='!'){
		resetData();
		updateDisplay(factorial(leftSide));
	}
}
function getOperator(string){
	for(var i=0;i<string.length;i++){
		if(isOperator(string.substring(i,i+1))){
			return string.substring(i,i+1);
		}
	}
}
function resetData(){
	stack=[];
	displayString='';
}
function updateDisplay(input){
	stack.push(input);
	displayString+=stack[stack.length-1];
	$('#display').text(displayString);
}
function isOperator(input){
	if(operators.indexOf(input)!=-1){
		return true;
	}
	return false;
}
function isDecimal(input){
	if(input=='.'){
		return true;
	}
	return false;
}
});
function factorial(number){
	factorial=1;
	console.log(String(number));
	if(String(number).indexOf('-')!=-1){
		return 'ERROR: Factorial cannot be negative';
	}
	for(var i=1;i<number;i++){
		factorial*=(number-i);
	}
	//Accounts for negative numbers
	return factorial;
}