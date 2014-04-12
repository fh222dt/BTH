/**
 * Place your JS-code here.
 */
$(document).ready(function(){

	/*open & close boxes*/
	$('.boxes').click(function() {
    	$(this).next().show();
    	$(this).hide();

  	});

  	$('.close').click(function() {
  		$(this).parent().hide();
  		$(this).parent().prev(".boxes").show();
  	});
  
  /*box1*/
  $('#text1, #text2, h4, #pigs').click(function() {
    $(this).toggleClass('piggy');
    console.log("toggle!");
  });

  /*box2*/
  $('#box2-content').click(function() {
  	event.stopPropagation();
    $(this).toggleClass('piggy2');
    console.log("toggle!");
  });

  $('#running-pig').click(function(){
  	event.stopPropagation();
  	$(this).toggleClass('smaller normal');
  });

  /*box3*/
  $('#more-bacon').click(function(){
  	$('<div></div>').addClass('bacon')
  		.appendTo('#bacon-area')
  		.click(function() {
    	$(this).remove();
  	});
  });

  /*box4*/
  var dimentions = function() {
	  var height = $('#running-pig2').height(),
	      width = $('#running-pig2').width();
	  $('#dimentions').text('Bildens storlek är: ' + width + ' x ' + height + 'pixlar.');
  };
  dimentions();

  $('#width-plus').click(function(){
  	$('#running-pig2').css('width', '+=10px');
  	dimentions();
  	console.log('plus på bredden!');
  });

  $('#width-minus').click(function(){
  	$('#running-pig2').css('width', '-=10px');
  	dimentions();
  	console.log('minus på bredden!');
  });

  $('#height-plus').click(function(){
  	$('#running-pig2').css('height', '+=10px');
  	dimentions();
  });

  $('#height-minus').click(function(){
  	$('#running-pig2').css('height', '-=10px');
  	dimentions();
  });

  /*box5*/
  $('#fade').click(function(){
  	$('#piglets1').fadeToggle('slow', 'swing' );
  });

  $('#slide').click(function(){
  	$('#piglets2').slideToggle('slow');
  });

  /*box6*/
  function positionLightboxImage() {
	var top = ($(window).height() - $('#lightbox').height()) / 2;
	var left = ($(window).width() - $('#lightbox').width()) / 2;
	$('#lightbox')
	.css({
		'top': top, // + $(document).scrollTop(),
		'left': left
	})
	.fadeIn();
  }

  function removeLightbox() {
	$('#overlay, #lightbox')
		.fadeOut('slow', function() {
		$(this).remove();
		$('body').css('overflow-y', 'auto'); // show scrollbars!
	});
  }

  $('.lightbox').click(function(){
  	// hide scrollbars!
	$('body').css('overflow-y', 'hidden');
	
	$('<div id="overlay"></div>')
	//.css('top', $(document).scrollTop())	//
	.css('opacity', '0')
	.animate({'opacity': '0.5'}, 'slow')
	.appendTo('body');
	
	$('<div id="lightbox"></div>')
	.hide()
	.appendTo('body');
	
	$('<img>')
	.attr('src', $(this).attr('src'))
	.css({
        'max-height': window.innerHeight, 
        'max-width':  window.innerWidth
    })
	.load(function() {
	positionLightboxImage();
	})
	.click(function() {
	removeLightbox();
	})
	.appendTo('#lightbox');
	return false;
  });

  /*box7*/
  $('#gallery-small img').click(function(){
  	$('#gallery-big img')
  	.attr('src', $(this).attr('src'))
  	
  	$('#gallery-small img').removeClass('gallery-selected');

  	if( $('#gallery-big img').attr('src') === $(this).attr('src') ) {
  		$(this).addClass('gallery-selected');
  	}
  });

  /*box8*/

  

  var rotateSlideshow = function(currentPhoto) {
  	var numberOfPhotos = $('#slideshow img').length;
	currentPhoto = currentPhoto % numberOfPhotos;

	$('#slideshow img').eq(currentPhoto).fadeOut(1000, function() {
		// re-order the z-index
		$('#slideshow img').each(function(i) {
			$(this).css(
				'zIndex', ((numberOfPhotos - i) + currentPhoto) % numberOfPhotos
			);
		});
	$(this).show();
	setTimeout(function() {rotateSlideshow(++currentPhoto);}, 4000);
  	});
  }

  rotateSlideshow(1);

  /*box9*/

$('.img-info').hover(function() {
    $(this).imgInfo();
    }, function() {
        $('#imgInfo').remove();
    }
);

  

  

});