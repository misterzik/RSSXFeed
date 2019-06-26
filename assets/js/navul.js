/**
 *
 * NavUl CSS3 - Responsive Navigation, Using CSS3 & jQuery.
 * Mainly used by The Insanen Team - www.insanen.com
 * For small projects.
 * www.insanen.com/github
 *
 */

 (function ( $ ) {

     /*$.fn.greenify = function() {
         this.css( "color", "green" );
         return this;
     };*/

     /*$fn.navul = function() {
        $("#navUl").click(function(){
        $("._tglNavUl").toggle(1000, function(){
            console.log("The toggle() method is finished!");
          });
        });
      };*/

       $(document).ready(function () {

            $("#navul-menu").hide();

             $(".navul-toggle").click(function() {
                 $("#navul-menu").slideToggle(100);
            });


      });

}( jQuery ));
