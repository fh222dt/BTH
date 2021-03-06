<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisning";
$data['meta_description'] = "Redovisning av kursmoment i kursen phpmvc";
$data['main'] = <<<EOD
<h1>Kmom02</h1>
<p>
Det här momentet var spännande att genomföra. Jag har fått en bra förklaring över hur ett ramverk kan byggas upp, 
och hur man kan tänka. T ex gillar jag att man kan använda olika slags url:er. Har tidigare jobbat enbart med query-strings. 
Under tutorialens gång har jag följt med rätt bra. Varje moment har haft en bra förklaring, men det vill till att man 
läser noga och också tittar i sin kod för att hänga med i alla moment. Bara klippa & klistra skulle inte gå. Namngivningen 
av klasser med CCKlassnamn tycker jag var jättebra, man kan enkelt se vad det är för innehåll i en viss fil bara på 
namnet. Det var också bra att få se ett exempel på Interface efter att ha läst det i kurslitteraturen. 
</p>
<p>
I del 4 där vi gick igenom hantering av teman, blev jag väldigt glad för det har jag tänkt lära mig ett bra sätt för, 
men aldrig hittat ett tankesätt att utgå ifrån, men nu har jag det. Och det är väldigt kul! Mot slutet av tutorialen 
skulle vi ändra koden i CRequest::Init, då kopierade jag mos kod rakt av för jag hade så mycket i huvudet att jag inte
 kunde tänka ut något eget. Samma sak blev det när jag skulle testa olika sorters länkar. Det blev för svårt, så jag 
 lånade mos slösning på CCDeveloper. Det jag inte förstår riktigt ännu är hur vyer kommer in i bilden, men det ska vi 
 ju lära oss mer om framöver.
</p>
<p>
Jag har döpt mitt ramverk till "Wooly" eftersom materialet ull är väldigt mångsidigt och naturligt. Samma sak tänker 
jag om Lydia, att det kan användas till mycket, och är ett naturligt sätt att koda på. Lydias struktur upplever jag som 
ett mycket bra sätt att jobba på. Det är bra att dela upp koden i så många delar, då kan man lättare återanvända 
delar av den till annat. Det är bra att man ska använda GitHub i den här kursen så att jag inte kan smita från det som 
jag annars lätt gör. Jag använder GitHubs desktopklient för win8 när jag committar kod, det tycker jag fungerar 
jättebra.
</p>
<a href="https://github.com/fh222dt/BTH/tree/master/phpmvc">Wooly på GitHub</a>



<h1>Kmom01</h1>

<p>Det känns kul att köra vidare med ännu en kurs! Jag har lite tidigare erfarenheter av en annan 
kurs om mvc som jag inte avslutat, så det ska bli kul att få lära sig mer. Jag använder samma 
utvecklingsmiljö som i förra kursen; Windows med Sublime Text 2, och en Xampp-server.</p>
<p>Jag har inte tidigare jobbat med någon mall av typen Html5Boilerplate. Men jag har hört
talas om att de finns. Jag tycker att det verkar ganska bra att använda när man vill komma igång
snabbt med ett projekt. Mitt första intryck är positivt. Strukturen och kvalitén man får
av boilerplaten är bra att jobba med så att det blir rätt från början. Men jag har lite svårt att 
förstå hur man ska få till det på ett bra sätt med min egen kod som jag ska skriva. </p>
<p>
Min me-sida gjorde jag därför i princip på samma sätt som Mos gjort sin. Jag är inte helt överens om 
att göra en egen struktur i theme-mappen. Jag upplever det inte helt naturligt, men det kommer 
förhoppningsvis att falla på plats framöver. Jag kan tänka mig fördelen med att senare kunna 
uppdatera lättare, men strukturen på mapparna blir lite konstig. Det känns underligt att ha en 
css-fil i themes-mappen när det finns en css-mapp. Därför har jag lagt min css i boilerplatens 
css-mapp istället.</p>
<p>En annan sak jag är lite frågande inför är egentligen inte Html5Boilerplates kod, utan att det 
med mos kod genereras style i headern. Det gillar jag inte, utan vill ha all style i separata filer 
pga optimeringsskäl. Men som det är nu ville jag komma igång snabbt och det är endast source.php 
som har styling liggandes i headern. Beror lite på vad vi gör med detta framöver om jag ska satsa 
på att flytta stylingen eller ej.</p>
<p>
Det som jag tycker är mest intressant med boilerplaten är som påpekas i artikeln den kunskap man får
med sig från de bästa i branschen. Jag har lärt mig en hel del trix av att läsa dokumentationen, och 
fått förståelse för varför saker är placerade där de är i koden.
</p>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 