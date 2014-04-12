<?php $title='Boxes of jQuery'; include(__DIR__ . '/header.php'); ?>
 
<div id='flash' class='clearfix'>
	<h4>Klicka på lådorna för att testa olika exempel med jQuery.</h4>

	<div id='box1' class='boxes'>
		<img class='box-img' src='box.png' alt='box'>
		<h2>1</h2>		
	</div>
	<div id='box1-content' class='big-boxes hidden'>
		<div class='close'><a href=#>[x]</a></div>
		<h4>Selecting items, hide, show & change their look</h4>
		<p id='text1'>Ett stycke text att leka med. Porchetta venison pork loin flank 
		frankfurter brisket ham hock leberkas doner hamburger prosciutto drumstick 
		boudin shankle. Ball tip chicken corned beef pork belly. Meatloaf porchetta 
		ribeye, prosciutto tongue landjaeger ham hock. Pork chop rump turducken, 
		landjaeger swine shank strip</p>
		<p id='text2'>Ett till stycke text att leka med. Meatball filet mignon andouille tail, 
		sirloin tenderloin strip steak short loin ball tip pig drumstick. Flank beef pastrami
		 capicola ball tip strip steak tail tongue. Cow sausage pork belly turducken ground 
		 round, brisket doner pork strip steak shank pig tri-tip porchetta. Bacon kevin shoulder 
		 meatloaf ham hock. Tongue sausage andouille t-bone leberkas beef ribs boudin, biltong 
		 jerky frankfurter salami filet mignon beef capicola short ribs.</p>
		<img id="pigs" src="happy-pigs.jpg" alt='happy pigs'>
	</div>

	<div id='box2' class='boxes'>
		<img class='box-img' src='box.png' alt='box'>
		<h2>2</h2>
	</div>
	<div id='box2-content' class='big-boxes hidden'>
		<div class='close'><a href=#>[x]</a></div>
		<h4>Events and event propagation</h4>
		<p id='text3'>Ett stycke text att leka med. Porchetta venison pork loin flank 
		frankfurter brisket ham hock leberkas doner hamburger prosciutto drumstick 
		boudin shankle. Ball tip chicken corned beef pork belly. Meatloaf porchetta 
		ribeye, prosciutto tongue landjaeger ham hock. Pork chop rump turducken, 
		landjaeger swine shank strip</p>
		<p id='text4'>Ett till stycke text att leka med. Meatball filet mignon andouille tail, 
		sirloin tenderloin strip steak short loin ball tip pig drumstick. Flank beef pastrami
		 capicola ball tip strip steak tail tongue. Cow sausage pork belly turducken ground 
		 round, brisket doner pork strip steak shank pig tri-tip porchetta. Bacon kevin shoulder 
		 meatloaf ham hock. Tongue sausage andouille t-bone leberkas beef ribs boudin, biltong 
		 jerky frankfurter salami filet mignon beef capicola short ribs.</p>
		<img id="running-pig" class='normal' src="running-pig.jpg" alt='running pig'>
	</div>

	<div id='box3' class='boxes'>
		<img class='box-img' src='box.png' alt='box'>
		<h2>3</h2>
	</div>
	<div id='box3-content' class='big-boxes hidden'>
		<div class='close'><a href=#>[x]</a></div>
		<h4>Add and remove elements</h4>
		<p>Hur mycket bacon orkar du äta? Klicka på knappen för att fylla upp tallriken!</p>
		<button id='more-bacon'>Mer bacon</button>
		<div id='plate'><div id='bacon-area'></div></div>
	</div>

	<div id='box4' class='boxes'>
		<img class='box-img' src='box.png' alt='box'>
		<h2>4</h2>
	</div>
	<div id='box4-content' class='big-boxes hidden clearfix'>
		<div class='close'><a href=#>[x]</a></div>
		<h4>Let's resize me</h4>
		<p id='dimentions'></p>
		<label>Ändra bredd:</label>
		<button id='width-plus'>+</button>
		<button id='width-minus'>-</button>
		<label>Ändra höjd:</label>
		<button id='height-plus'>+</button>
		<button id='height-minus'>-</button>
		<img id="running-pig2" src="running-pig.jpg" alt='running pig' width='300px' height='200px'>
	</div>

	<div id='box5' class='boxes'>
		<img class='box-img' src='box.png' alt='box'>
		<h2>5</h2>
	</div>
	<div id='box5-content' class='big-boxes hidden clearfix'>
		<div class='close'><a href=#>[x]</a></div>
		<h4>Basic animations</h4>
		<div class='animate'>		
			<img id="piglets1" src="piglets.jpg" alt='piglets'>
			<p id='fade'>Fade</p>
		</div>
		<div class='animate'>
			<img id="piglets2" src="piglets.jpg" alt='piglets'>
			<p id='slide'>Slide</p>
		</div>
	</div>

	<div id='box6' class='boxes'>
		<img class='box-img' src='box.png' alt='box'>
		<h2>6</h2>
	</div>
	<div id='box6-content' class='big-boxes hidden clearfix'>
		<div class='close'><a href=#>[x]</a></div>
		<h4>A lightbox for images</h4>
		<p>Klicka på bilden för en förstoring</p>
		<img id='muddy' class='lightbox' src="muddy.jpg" alt='muddy pig'/>				
	</div>

	<div id='box7' class='boxes'>
		<img class='box-img' src='box.png' alt='box'>
		<h2>7</h2>
	</div>
	<div id='box7-content' class='big-boxes hidden clearfix'>
		<div class='close'><a href=#>[x]</a></div>
		<h4>Gallery</h4>
		<div id='gallery'>
			<div id='gallery-big'><img src='muddy.jpg' alt='muddy pig'/></div>
			<div id='gallery-small' class='clearfix'>
				<img src='muddy.jpg' alt='muddy pig'/>
				<img src='piglets.jpg' alt='piglets'/>
				<img src='happy-pigs.jpg' alt='happy pigs'/>
				<img src='running-pig.jpg' alt='running pig'/>
				<img src='food.jpg' alt='pigs eating'/>
				<img src='rain.jpg' alt='wet pig'/>				
			</div>
		</div>
	</div>

	<div id='box8' class='boxes'>
		<img class='box-img' src='box.png' alt='box'>
		<h2>8</h2>
	</div>
	<div id='box8-content' class='big-boxes hidden clearfix'>
		<div class='close'><a href=#>[x]</a></div>
		<h4>Slideshow</h4>
		<div id='slideshow'>
			<img src="muddy.jpg" alt='muddy pig' class="show"/>
			<img src='piglets.jpg' alt='piglets'/>
			<img src='happy-pigs.jpg' alt='happy pigs'/>
			<img src='food.jpg' alt='pigs eating'/>
		</div>				
	</div>

	<div id='box9' class='boxes'>
		<img class='box-img' src='box.png' alt='box'>
		<h2>9</h2>
	</div>
	<div id='box9-content' class='big-boxes hidden clearfix'>
		<div class='close'><a href=#>[x]</a></div>
		<h4>Plugin</h4>
		<div class="example">
			<img class="mud-pigs img-info" src="lergrisar.jpg" alt="Leriga glada ekologiska grisar">
		</div>			
	</div>
</div>
 
<?php $path=__DIR__; include(__DIR__ . '/footer.php'); ?>