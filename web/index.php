<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my google maps</title>
    <style>
        *{
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
        }
        #map{
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>


    <?php
        $content = file_get_contents("https://4b25-197-25-164-104.ngrok.io/");
        $json = json_decode($content, true);
        $x = $json['X'];
        $y = $json['Y'];
    ?>
    <div id="map"></div>


    
    <script>
        // function initMap(){
        //     var options = {
        //         zoom:,
        //         center:{lat:42.3601,lng:-71.0589}
        //     }
        //     styles: [{			"stylers":[			{"hue":"#007fff"},			{"saturation":89}			]		},{			"featureType":"water",			"stylers":[			{"color":"#ffffff"}			]		},{			"featureType":"administrative.country",			"elementType":"labels",			"stylers":[			{"visibility":"off"}			]		}];


        //     var map = new
        //     google.maps.Map(document.getElementById('map'),options);

            
        // }

        // When the window has finished loading create our google map below
        
        function initMap() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 3,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(<?= $x ?>, <?= $y ?>), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{			"stylers":[			{"hue":"#007fff"},			{"saturation":89}			]		},{			"featureType":"water",			"stylers":[			{"color":"#ffffff"}			]		},{			"featureType":"administrative.country",			"elementType":"labels",			"stylers":[			{"visibility":"off"}			]		}]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?= $x ?>, <?= $y ?>),
                map: map,
                title: 'Snazzy!'
            });
        }
    </script>


    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWpxIlokPJaXVGGjerC_AbX3WLTFfLcfw&callback=initMap"
    defer
  ></script>

  
</body>
</html>