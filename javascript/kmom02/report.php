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

<h2>Kmom02</h2>
<p>Ojoj vilken tid det tagit att göra detta moment. Jag som trodde jag var lite hemma på javascript
ändå. Det var massor jag inte kunde eller kanske glömt ;). Jag kände mig extra borta i uppgiften med numbers då jag aldrig 
ens hört talas om sinus eller Eulers. Men det gick ju ändå. När jag började med den första uppgiften skrev jag först 
varje rad hårdkodad för sig. Men sen när jag tittade på mos kod såg det ju bra mycket bättre ut, så jag bytte ut min kod. 
Tycker det gick bra med de första övningarna fram tills den med att flytta bollen. Jag fastnade totalt, och det slutade 
med ctrl+c, ctrl+v på den uppgiften. </p>
<p>Boulder Dash var också något jag aldrig stött på. Jag spelade ett spel som ser liknande ut iaf som hette Chip. Jag 
tog mig an uppgiften med att först göra spelplanen. Jag utgick från mos arrayer, som jag sedan ändrade lite i för att få 
mer hinder på planen. Sen ville jag kunna röra på figuren, och jag höll på med en massa kod hit och dit. Det blev inget 
bra, så jag kikade på exemplet. Samma sak med koden för att känna igen tangenttryck.</p>
<p>Sista uppgiften med roulette var svårlöst. Jag kan inte spelet i sig, så det gör det lite krångligare. Men efter 
att ha googlat lite hur spelet går till, blev det iaf lättare att förstå själva spellogiken. Jag är van att skriva in alla 
mina html-element till så stor del som möjligt i html-dokumentet för att sedan modifiera dem från js-scriptet. Men i 
flera av uppgifterna hittills har vi skapat en del av dem i scriptet istället. Så till den här uppgiften ville jag göra 
på mitt sätt. Det känns mer bekvämt. Men så såg jag att mos också hade i stort sett allt i index.php denna gång. Det 
gjorde att jag gav dem samma id:n som han så att det skulle bli lättare med koden. Sen skapade jag själva roulette-bordet 
och så långt gick det rätt bra. Men spinn och knapptryck samt utskrift av resultat hade jag svårt att hänga med på. Jag 
skulle nog behöva en stegvis genomgång av roulette-koden för att verkligen förstå hur den fungerar till fullo. </p>
<p>Min mos.js heter frida.js. Jag la in min random-funktion som jag hittade i manualen hos mozilla developer, och 
funktionen getOffset som jag använde i uppgiften med bollen. Jag hade dessa funktioner i respektive main.js först, så jag 
flyttade bara över dem till frida.js istället.</p>
<p>Sammantaget känner jag mig förvirrad efter detta kursmoment. Hoppas det klarnar framöver. Vet inte om det kan bero 
på att jag använt jQuery senast det begav sig eller vad det är. Helt klart är det nyttigt att lära sig javascript 
'en gång till' för min del, och jag ser fram emot mer utmaningar! Det blev inget extraarbete utfört, tycker mig inte vara 
mogen för det ännu.</p>

<a href='lekplats.php'>Till lekplatsen</a>

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