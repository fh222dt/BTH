<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Wooly -ett MVC-ramverk";
$data['meta_description'] = "Wooly -ett MVC-ramverk";
$data['main'] = <<<EOD
<h1>Wooly</h1>

<p>Via denna sida kan man komma åt mitt MVC-ramverk som växer fram under kursens gång. Det är döpt till Wooly.</p> 
<a href="mvc/">Till Wooly</a>
<p></p>
<a href="https://github.com/fh222dt/BTH/tree/master/phpmvc">Du kan också se Wooly på GitHub</a>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 