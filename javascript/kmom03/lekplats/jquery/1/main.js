/**
 * Place your JS-code here.
 */
$(document).ready(function(){
  $('#text1, #text2, h4, img').click(function() {
    $(this).toggleClass('piggy');
    console.log("toggle!");
  });  
});