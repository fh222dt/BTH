<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisning";
$data['meta_description'] = "Redovisning av kursmoment i kursen phpmvc";
$data['main'] = <<<EOD

<h1>Kmom05</h1>
<p>Ett moment som var lite lättare än de innan. Skönt med en paus för huvudet. Det är mycket att hålla reda på.
Man tänker sig att det ska vara mycket arbete för att kunna presentera blogg och sidor för besökaren. Men 
det gick oerhört smidigt. Vi hann ju tom göra några filter som jag tycker är jättebra. Det är väldigt smidigt att
skriva texter med ett filter. Men rent utseendemässigt behöver jag lägga till lite information om de olika filtren 
och hur de används. Det enda problem som uppstod för mig var att jag inte hade uppdaterat MUser, så det gick 
inte att skapa innehåll utan att var inloggad. Men det är nu fixat.</p>
<p>Jag läste artikeln om att skriva för webben. Den var väldigt intressant. Mycket av det som författaren 
skrev om känns självklart. Men jag använder mig inte av det för den skull tyvärr. Men jag fick flera bra 
tips att tänka på till nästa gång jag ska skriva en lite längre text.</p>
<p>Artiklarna om xxs skummade jag igenom. Det är mycket att tänka på som utvecklare. Nyttigt att läsa om hur det 
kan gå till. Samtidigt känns det som att det är rätt enkla metoder man kan använda sig av för att förhindra 
att man blir drabbad. Men det krävs att man har kunskap om ämnet. Listan med 10 regler att följa är nog bra 
att gå tillbaka till för varje projekt man genomför.</p>
<p></p>
<p></p>

<h1>Kmom04</h1>
<p>Det har varit mycket kod att hålla reda på i detta moment. Men jag har tagit ett 
steg i taget o i min egen takt fått till det. Jag har fått titta mycket på mos GitHub 
för att få det att fungera. Det var mycket kod som ändrats men som inte nämns i tuten. 
Jag lär mig mycket på att tyda felmeddelanden, och att leta runt i koden, både min egen 
och exemplet. Så jag vill inte säga att det är negativt att allt inte står med i texterna. 
Men det är frustrerande!</p>
<p>Jag gillade sättet att testa på via argument som vi använde i första delen. De förbättringar 
av koden som vi gjort den här gången var trevliga, och de flesta hade jag inte ens tänkt
på skulle kunna göras. Men däremot hade jag funderat redan förut när vi skapade den första 
varianten av databasen på lösenordshanteringen. Så det känns tryggt att det är hashat och 
saltat. Det är en teknik jag provat på i andra sammanhang också och förstått är bra.</p>
<p>Artikeln om CForm var väldigt bra att läsa innan man började använda den i Wooly sen. Jag har inte 
gjort något separat testprogram för CForm från artikeln, utan kört på enligt beskrivningen i tuten.
Det var ett helt nytt sätt att tänka på formulär för mig som jag tycker verkar jättebra att jobba med. 
Särskilt delarna med validering.</p>
<p>Nu har jag kommit ytterligare en bit på väg i mitt ramverk och det blir lättare och lättare att hänga 
med i vad som sker i de olika delarna. Det blir automatiskt också lättare att bygga på med mer funktionalitet 
då jag förstår vad varje del av koden gör, ju mer tid jag jobbar med koden.</p>
<p></p>
<p></p>


<h1>Kmom03</h1>
<p>Jag började det här momentet med att läsa artikeln om CodeIgniter, jag fick ett bra hum om uppbyggnaden, men
hängde inte riktigt med i alla detaljer. Så här efter att jag gjort momentet förstår jag mer, och ska gå
tillbaka och skumma igenom igen. Sedan har jag jobbat på med tutorialen del 2. Det har gått bra, men varit mycket 
att tänka på.</p>
<p>Jag fick snabbt problem då jag glömt ändra i min .htaccess från förra momentet när jag kopierat koden till en
ny mapp för att jobba med i detta moment. Men när jag kom underfund med det, flöt det på bättre. Jag tycker 
det blev många bra förbättringar av koden den här gången. Bl a att vi bytte till this istället för ly. Jag 
blir alltid lite virrig av vad this står för, men det är ju mycket lättare att koda med. I del 2 stötte jag på 
krångel med sessionen som aldrig startades. Det fanns en bra kommentar till tutorialen som visade mig i rätt 
riktning.</p>
<p>Jag tycker att tanken med att lägga alla sql-satser i en egen metod är toppen. Det blir så mycket enklare 
att underhålla och att läsa koden efter den förbättringen. Jag har jobbat enligt mos lösningar, dels för att hans 
argument med att det blir lättare att bygga vidare på framöver, och dels för att följa med i nästa steg blir 
svårt om jag gjort något annat. När jag kom till del 7 i tuten tappade jag bort mig. Det var lite knapphändig 
information som gjorde att jag inte har implementerat det som nämns om timer. Vet inte om det var det som 
påverkade att det blev konstigt i sista steget och jag fick kopiera en hel del kod till CRequest & CObject för 
att lösa uppgiften.</p>
<p>Jag valde att göra extrauppgiften för att skydda sig mot spam. Det var en enkel lösning som presenterades. 
Min tolkning av lösningen är att inte göra något alls i controllern om en spybot fyllt i mitt dolda fält. Men jag vet inte 
om man kanske ska kasta ett undantag eller liknande. Jag gillar mvc-strukturen och känner mig mer trygg i 
tänket för varje moment jag jobbar med. </p>
<p><a href="mvc/guestbook">Besök min gästbok</a></p>

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