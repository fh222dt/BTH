<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Plugin";
$data['meta_description'] = "jQuery Plugin";
$data['main'] = <<<EOD
<h1>Image-info plugin</h1>
<p>
Det här är ett plugin till jQuery som ger information om en bild. Testa med bilden nedan genom att föra musen över den!
</p>
<div class="example">
<img class="mud-pigs img-info" src="lekplats/jquery/lergrisar.jpg" alt="Leriga glada ekologiska grisar">
</div>

<p>För att detta exempel ska få det utseende du ser här måste du ha en bild, som du placerar i en div som har "css: position: relative;"</p>
<p>Sedan sätter du klassen ".img-info" på bilden.</p>
<p>För en hover-effekt kan man anropa t ex så här:</p>
<img src="img/code.png" alt="code">

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 