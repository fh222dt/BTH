/**
 * Place your JS-code here.
 */

var random = function(min, max) {
	 return Math.floor(Math.random() * (max - min + 1)) + min;
}

var rollDice = function(times) {
	var face, series = '', sum = 0;
	
	for (var i=0;  i<times; i++) {
		face = random(1, 6);
		series += face + ', ';
		sum = sum + face;
	}
	return series + '<br/> Medelvärde: ' + sum/times;
}

$(document).ready(function(){
  'use strict';
  var text, header;
  text = document.getElementById('text');
  header = document.createElement('h4');

  header.innerHTML = 'Dice';
  text.parentElement.insertBefore(header, text);

  text.innerHTML = 'Kastar tärningen 5 ggr <br/>';
  text.innerHTML += rollDice(5);
  text.innerHTML += '<br/><br/>';

  text.innerHTML += 'Kastar tärningen 17 ggr <br/>';
  text.innerHTML += rollDice(17);
  text.innerHTML += '<br/><br/>';

  text.innerHTML += 'Kastar tärningen 50 ggr <br/>';
  text.innerHTML += rollDice(50);
  text.innerHTML += '<br/><br/>';
   
  
});