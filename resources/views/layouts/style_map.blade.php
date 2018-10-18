<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="css/map.css">


        <!-- SCRIPTS -->
        <script src="js/map.js"></script>

        <!-- font script -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="ask_position">
            <div id="ask_position_field">
                <div id="ask_position_header">
                    <h5>Allow script to use your location</h5>
                </div>
                <div id="ask_position_body">
                    <div class="ask_buttons" title="Allow script to use your location" onclick="ask_for_position(1);">
                        <p>Allow</p>
                    </div>
                    <div class="ask_buttons" title="Block script to use your location" onclick="ask_for_position(0);">
                        <p>Block</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="map"></div>

        <div id="search_bar">

        </div>

    <!-- google maps script -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAApiBLPehhhJkDFqzlfNGN99n18N4PZxA&callback=init" async defer></script>
    </body>
</html>