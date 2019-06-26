(function ( $ ) {

    /*$.fn.greenify = function() {
        this.css( "color", "green" );
        return this;
    };*/

$(document).ready(function () {

      $('#toggle').click(function() {
         $(this).toggleClass('active');
         $('#overlay').toggleClass('open');
      });

      $('a[href^="http://"]').attr({'target','_blank'});
      $('a[href^="https://"]').not('a[href*=localhost]').attr('target','_blank');



}( jQuery ));
