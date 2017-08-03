<?php include 'header.php';  ?>
<section class="location">
   <div id="map"></div>

</section>
<section class="times">
    <div class="row">
        <div class="container">
        <h2>DRIVE TIMES</h2>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4 class="time-title">Leeds</h4>
                <p><span class="color">Drive Time</span> 7 minutes</p>
                <p><span>Distance</span> 3 miles</p>
                <h4 class="time-title">Leeds</h4>
                <p><span class="color">Drive Time</span> 7 minutes</p>
                <p><span>Distance</span> 3 miles</p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4 class="time-title">Leeds</h4>
                <p><span class="color">Drive Time</span> 7 minutes</p>
                <p><span>Distance</span> 3 miles</p>
                <h4 class="time-title">Leeds</h4>
                <p><span class="color">Drive Time</span> 7 minutes</p>
                <p><span>Distance</span> 3 miles</p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4 class="time-title">Leeds</h4>
                <p><span class="color">Drive Time</span> 7 minutes</p>
                <p><span>Distance</span> 3 miles</p>
                <h4 class="time-title">Leeds</h4>
                <p><span class="color">Drive Time</span> 7 minutes</p>
                <p><span>Distance</span> 3 miles</p>
            </div>
        </div>
    </div>
    </div>
</section>
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

 <script type="text/javascript">

            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,
                     zoomControl: true,
                      scaleControl: true,
                      scrollwheel: false,
                      disableDoubleClickZoom: true,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#a46934"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#a46934"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);



                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Snazzy!',
                     icon: image
                });

            }

        </script>

<?php include 'footer.php';  ?>