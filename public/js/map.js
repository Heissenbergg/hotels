/**
 * Get user location  geolocation
 * if it's not enabled, enable it by user and get location
 */

/** Maps and marker variables needed for update of position */
var map, marker, mapOptions, map_styles;

/** Global position variable : latitude and longitude */
var coords = {lat: "", lon: ""};

/** Set marker function - on permission approved **/
function setMarker(x,y){
    marker = new google.maps.Marker({
        position: new google.maps.LatLng(x, y),
        map: map,
        icon: 'images/map-marker.png',
        title: 'You are here !'
    });

}


/** set map into middle */
function setMap(x,y){
    var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(x,y),
        styles: set_map_style()
    };

    map = new google.maps.Map(document.getElementById('map'), mapOptions);
}

function getLocation() {
    if (navigator.geolocation) {
        var location = navigator.geolocation.getCurrentPosition(function(position){
            coords.lat = position.coords.latitude;
            coords.lon = position.coords.longitude;

            /** here we are about to update location centre */
            marker.setMap(null);
            setMap(coords.lat,coords.lon);
            setMarker(coords.lat,coords.lon);
        });

    } else {
        alert("Geolocation is not supported by this browser.");
    }
}


/** Ask user position */

function ask_for_position(use_or_not){
    //if use_or_not = true, allow using location and keep proceeding else deny everything
    if(use_or_not){
        getLocation();
    }
    //Hide shadow wrapper for asking about location
    document.getElementById("ask_position").style.display = 'none';
}


/**
    Create google maps object and initalize it
    - for style uses returned value from function set_map_style
    - all variables are global
*/

function init() {
    mapOptions = {
        zoom: 14,
        center: new google.maps.LatLng(43.8535072 , 18.40),
        styles: set_map_style()
    };

    map = new google.maps.Map(document.getElementById('map'), mapOptions);
    marker = new google.maps.Marker({
        // position: new google.maps.LatLng(43.8635072 , 18.42),
        // map: map,
        // title: 'You are here !'
    });
}

/** set map style : color, roads, etc.. */
function set_map_style(){
    return [
        {
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#444444"
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#f2f2f2"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "all",
            "stylers": [
                {
                    "saturation": -100
                },
                {
                    "lightness": 45
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "simplified"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#dde6e8"
                },
                {
                    "visibility": "on"
                }
            ]
        }
    ]
}