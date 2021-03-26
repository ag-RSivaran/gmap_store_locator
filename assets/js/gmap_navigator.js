/**
 * @file
 * Contains the definition of the behaviour storeLocatorMap.
 */

(function ($, Drupal, drupalSettings) {
    'use strict';

    jQuery('body .gmap_map_spn').click(function(){
      console.log('map click');

      // $('#map').css('display','block');
      jQuery('#map').show();
      jQuery('#location-list-wrapper').hide();

    });

    jQuery('body .gmap_fndstr_spn').click(function(){
      console.log('finder click');


      // $('#map').css('display','block');
      jQuery('#map').hide();
      jQuery('#location-list-wrapper').show();
    });


    getLocation();
    function getLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
            console.log("Geolocation is not supported by this browser.");
        //   x.innerHTML = "Geolocation is not supported by this browser.";
        }
      }
      
      function showPosition(position) {
        // x.innerHTML = "Latitude: " + position.coords.latitude + 
        // "<br>Longitude: " + position.coords.longitude;

        var msg = "Latitude: " + position.coords.latitude + 
        "<br>Longitude: " + position.coords.longitude;

        console.log(msg);
      }

});