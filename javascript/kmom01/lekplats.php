<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Lekplats";
$data['meta_description'] = "Fridas Lekplats för Javascript";
$data['main'] = <<<EOD
<div id='playground'>
<h1>Fridas Lekplats för Javascript</h1>
<h2>Kmom01</h2>
<ul>
<li><a href='http://jsfiddle.net/DRDqR/' target='_blank'>jsfiddle</a></li>
<li><a href='lekplats/mall'>Min mall</a></li>
<li><a href='lekplats/sizing-div'>Ändra storlek på div</a></li>
<li><a href='lekplats/baddie'>Baddie</a></li>
<li><a href='lekplats/transform'>Transform Baddie</a></li>
</ul>
</div>
EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 