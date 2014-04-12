(function($) {
 
  $.fn.imgInfo = function() {

    var height = $('.img-info').height(),
          width = $('.img-info').width(),
          file = $('.img-info').attr('src'),
          slash = file.lastIndexOf('/'),
          fileName = file.substring(slash + 1);        

    return $('<div id="imgInfo"><p>size: '+ height+ 'x' +width+ ' px, filename: '+fileName+' </p></div>')
                .insertAfter('.img-info');
  };
}) (jQuery);

$(document).ready(function(){
    $('.img-info').hover(function() {
        $(this).imgInfo();
        }, function() {
            $('#imgInfo').remove();
        }
    );
});