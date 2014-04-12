/**
 * Place your JS-code here.
 */
$(document).ready(function(){
  'use strict';
  var table = document.getElementById('table'),
  	button = document.getElementById('button'),
  	bet = document.getElementById('bet'),
    bankroll = document.getElementById('bankroll'),
    color = document.getElementById('color'),
    log = document.getElementById('log');

  var getColor = function(no) {
  	var colors = ['green', 'black', 'red'],
      tableColor = [0,2,1,2,1,2,1,2,1,2,1,1,2,1,2,1,2,1,2,2,1,2,1,2,1,2,1,2,1,1,2,1,2,1,2,1,2];   
    return colors[tableColor[no]];
  };

  var drawTable = function() {
  	var i, e;    
    for(i = 0; i <= 36; i++) {
      e = document.createElement('div');
      e.innerHTML = i;
      e.className = 'number ' + getColor(i);
      e.id = 'n' + i;
      table.appendChild(e);
    } 
  };

  var clearTable = function() {
  	var i, e;    
    for(i = 0; i <= 36; i++) {
      e = document.getElementById('n' + i);
      e.className = 'number ' + getColor(i);
    } 
  };

  var random = function(min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
  };

  var spinnWheel = function(times) {
  	var i, res = [];
    times = times || 1;
    
    for(i = 0; i < times; i++) {
      res[i] = random(0, 36);
    }
    return res;
  };

  var output = function(e, text) {
  	var el = document.createElement('p');
    el.innerHTML = text;
    return e.insertBefore(el, e.firstChild);
  }

  button.addEventListener('click', function () {
    var current = output(log, '&ndash; Bet is ' + bet.value + ' spinning the wheel&hellip;'),
      times = 10, results, step = 0, animateSpinn;
    
    animateSpinn = function () {
      var number, winColor, betColor;
      
      number = document.getElementById('n' + results[step]);
      number.className += ' selected';
      
      if (step > 0) {
        number = document.getElementById('n' + (results[step-1]));
        number.className = 'number ' + getColor(results[step-1]);
      }
      
      step += 1;
      if (step < times) {
        window.setTimeout(animateSpinn, 500);
      } else {
        winColor = getColor(results[step-1]);
        betColor = color.value;
        current.innerHTML += ' Stopped at: ' + results[step-1] + ' ' + winColor;
        
        if (winColor === betColor) {
          current.innerHTML += '. You won ' + (parseInt(bet.value, 10) * 2) + '.';
          bankroll.value = parseInt(bankroll.value, 10) + parseInt(bet.value, 10) * 2;
        } else {
          current.innerHTML += '. You lost.';
        }
        console.log('Bankroll: ' + bankroll.value + ' Bet: ' + bet.value);          
      }
    };
    
    clearTable();
    bankroll.value = parseInt(bankroll.value, 10) - parseInt(bet.value, 10);
    results = spinnWheel(10);
    window.setTimeout(animateSpinn, 500);
  }, false);

  drawTable();
  output(log, 'Welcome to my Roulette table, care to gamble using Martingale?');
  
});