/**
 * Place your JS-code here.
 */
$(document).ready(function(){
  'use strict';
  var text = document.getElementById('text'),
  header = document.createElement('h4'), 
  mystring, mynumber;

  console.log('Starting');

  header.innerHTML = 'Strings - Datatypes and values';
  text.parentElement.insertBefore(header, text);

  mystring = 'Copright \u00A9 by Frida';
  text.innerHTML = mystring + '</br>';

  mystring = mystring + ' Mumintrollet';
  text.innerHTML += mystring + '</br>';

  mystring = mystring + ' 1942';
  text.innerHTML += mystring + '</br>';

  mystring = mystring + '.';
  text.innerHTML += mystring + ' Längd: ' + mystring.length + '</br>';

  mystring = mystring.substr(0,14) + mystring.substr(19);
  text.innerHTML += mystring + ' Längd: ' + mystring.length + '</br>';

  mynumber = "19" + "42";
  text.innerHTML += mynumber + ' Typ: '+typeof(mynumber)+ '</br>';

  mynumber = "19" + 42;
  text.innerHTML += mynumber + ' Typ: '+typeof(mynumber)+ '</br>';

  mynumber = 19 + 42;
  text.innerHTML += mynumber + ' Typ: '+typeof(mynumber)+ '</br>';

  mynumber = 19 + "42";
  text.innerHTML += mynumber + ' Typ: '+typeof(mynumber)+ '</br>';

  console.log('Ready');
  
});