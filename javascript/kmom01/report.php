<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisning";
$data['meta_description'] = "Redovisning av kursmoment i kursen Javascript";
$data['main'] = <<<EOD
<h1>Redovisning</h1>
<h2>Kmom01</h2>
<p>Den sista kursen i kurspaketet, och den jag nog kommer tycka är roligast! Jag har kodat javascript sedan innan och 
tycker det är roligt att hålla på med. Jag har använt jQuery lite grann också. Jag tänker snarare ja vad kul! och inte 
argh! - måste jag? när jag tänker på javascript. Jag fortsätter att använda mig av Sublime och sitter kvar vid min 
win8 laptop och skriver. </p>
<p>Det här första momentet gick bra, även fast det är lite virrigt att tänka ren js när jag är mer van vid jQuery.
Jag har gjort alla övningar som gicks igenom och har skapat mig en <a href='lekplats.php'>lekplats</a> där jag samlat allt.
Därifrån kommer man åt mina mallar, baddie mm. För själva me-sidan har jag kopierat min html5 boilerplate som gjordes i den 
förra kursen. Jag tycker den var lagom mycket att använda för detta ändamål.
</p>
<p>Jag valde att inte använda LESS. Jag får intrycket att det är för mycket att lära sig av någon anledning. Men när jag 
gjorde sista test-programmet med transforms insåg jag lite av styrkan då olika webbläsare behöver sin egen css-kod för 
att det ska funka. Allt fungerar ju bra i firefox. Men jag använder chrome mer, och där måste man ha ett prefix för att det 
ska fungera. Detta har jag nu förstått att LESS gör åt mig. Så jag får nog ta och lära mig det tills nästa gång.</p>
<p>Min baddie döpte jag till Frida som jag själv heter. Den kan än så länge bara standardkonsterna. Men till sommaren 
ska den åka på cirkusläger och lära sig flera nya trix... Så vi väntar lite med extrauppgiften tills dess.</p>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 