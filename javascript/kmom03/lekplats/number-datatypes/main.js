/**
 * Print out literals and their type.
 */
$(document).ready(function(){
  'use strict';
  var element = document.getElementById('text'),
    numbers = [42, 4.2, 1.21e4, 1.12e-2, 0xff00ff],
    i, row = '';

  console.log('Starting');

  var header = '<h4>Numbers - Datatypes and values</h4>';
  element.innerHTML= header;

  var table = document.createElement('table');

  for (i=0;  i<numbers.length; i++) {
    row += '<th>' + numbers[i] + '</th>';
  }
  row = '<tr><th>Function</th>' + row + '</tr>';
  
  row += '<tr><td>Exponentialform (2e7):</td>';
    for (i=0;  i<numbers.length; i++) {
    row += '<td>' + numbers[i].toExponential() + '</td>';
  }
  row += '</tr>';
    
  row += '<tr><td>Fixed form, three decimals:</td>';
  for (i=0;  i<numbers.length; i++) {
    row += '<td>' + numbers[i].toFixed(3) + '</td>';
  }
  row += '</tr>';
    
  row += '<tr><td>Round to closes integer:</td>';
  for (i=0;  i<numbers.length; i++) {
    row += '<td>' + Math.round(numbers[i]) + '</td>';
  }
  row += '</tr>';
    
  row += '<tr><td>Square root:</td>';
  for (i=0;  i<numbers.length; i++) {
    row += '<td>' + Math.sqrt(numbers[i]).toPrecision(5) + '</td>';
  }
  row += '</tr>';
    
  row += '<tr><td>Value for sinus:</td>';
  for (i=0;  i<numbers.length; i++) {
    row += '<td>' + Math.sin(numbers[i]).toPrecision(5) + '</td>';
  }
  row += '</tr>';

  table.innerHTML = row;  

  element.innerHTML += '<p>Eulers constant E = ' + Math.E + '</p>';
  element.innerHTML += '<p>PI = ' + Math.PI + '</p>';
  element.innerHTML += '<p>Largest value possible = ' + Number.MAX_VALUE + '</p>';
  element.innerHTML += '<p>Positive infinity = ' + Number.POSITIVE_INFINITY + '</p>';

  element.parentElement.appendChild(table);
  
  console.log('Ready');
});
