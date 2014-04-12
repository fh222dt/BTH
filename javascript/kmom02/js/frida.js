/**
 * Helpers and tools to ease your JavaScript day.
 *
 * @author Frida
 */
window.Frida = (function(window, document, undefined ) {
  var Frida = {};

  Frida.random = function (min, max) {
    return Math.floor(Math.random()*(max-min)+min);
  }

  Frida.getOffset = function (el) {
      var _x = 0;
      var _y = 0;
      while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
          _x += el.offsetLeft - el.scrollLeft;
          _y += el.offsetTop - el.scrollTop;
          el = el.offsetParent;
      }
      return { top: _y, left: _x };
  }

  // Expose public methods
  return Frida;
  
})(window, window.document);