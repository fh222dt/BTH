// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

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