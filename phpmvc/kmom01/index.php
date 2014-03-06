<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Om mig";
$data['meta_description'] = "Om mig i kursen php mvc";
$data['main'] = <<<EOD
<h1>Hej!</h1>
<p>Jag heter Frida Holmström och är 29 år. Jag har varit intresserad av webben sen gymnasiet. 
Då fick min syster idéen att skriva om sin vattensköldpadda och jag hjälpte henne få igång en 
hemsida. Den blev etta på google på sökordet "vattensköldpadda", något som jag gärna vill ska hända 
igen i framtiden så klart, fast kanske med en annan sida en just vattensköldpaddan... Jag har läst 
olika kurser inom webb i flera språk och vill nu lära mig mer om php. Jag har påbörjat en halv kurs 
i php mvc så lite grann kan jag sen innan.
</p>
<img src="img/me.jpg" alt="Frida">
<aside class="left"> 
	<h2>Lite snabbfakta om mig:</h2>
	<p>
	<strong>Snacks:</strong> Lantchips med turkisk yougurt
	<br><strong>Ost:</strong> Mozzarella
	<br><strong>Dryck:</strong> Flädercider
	<br><strong>Bästa tvserie just nu:</strong> Fåret Shaun
	<br><strong>Färg:</strong> Turkos
	<br><strong>Årstid:</strong> Sommar
	<br><strong>När jag är ledig:</strong> Syr (fast oftast fastnar jag på YouTube...)
	<br><strong>Senast besökta resmål:</strong> Rügen
	<br><strong>Frukt:</strong> Banan
	<br><strong>Skor:</strong> Sneakers
	</p>
</aside></div>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 