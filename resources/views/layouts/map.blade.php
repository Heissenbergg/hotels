<!DOCTYPE html>
<html>
<head>
  <title>Welcome to our site</title>
  <link rel="stylesheet" href="map/processor/search.css">

  <link rel="stylesheet" media="all" href="map/jquery-jvectormap.css"/>
  <script src="map/assets/jquery-1.8.2.js"></script>
  <script src="map/jquery-jvectormap.js"></script>
  <script src="map/jquery-mousewheel.js"></script>

  <script src="map/jvectormap.js"></script>

  <script src="map/abstract-element.js"></script>
  <script src="map/abstract-canvas-element.js"></script>
  <script src="map/abstract-shape-element.js"></script>

  <script src="map/svg-element.js"></script>
  <script src="map/svg-group-element.js"></script>
  <script src="map/svg-canvas-element.js"></script>
  <script src="map/svg-shape-element.js"></script>
  <script src="map/svg-path-element.js"></script>
  <script src="map/svg-circle-element.js"></script>
  <script src="map/svg-image-element.js"></script>
  <script src="map/svg-text-element.js"></script>

  <script src="map/vml-element.js"></script>
  <script src="map/vml-group-element.js"></script>
  <script src="map/vml-canvas-element.js"></script>
  <script src="map/vml-shape-element.js"></script>
  <script src="map/vml-path-element.js"></script>
  <script src="map/vml-circle-element.js"></script>
  <script src="map/vml-image-element.js"></script>

  <script src="map/map-object.js"></script>
  <script src="map/region.js"></script>
  <script src="map/marker.js"></script>

  <script src="map/vector-canvas.js"></script>
  <script src="map/simple-scale.js"></script>
  <script src="map/ordinal-scale.js"></script>
  <script src="map/numeric-scale.js"></script>
  <script src="map/color-scale.js"></script>
  <script src="map/legend.js"></script>
  <script src="map/data-series.js"></script>
  <script src="map/proj.js"></script>
  <script src="map/map.js"></script>

  <script src="map/assets/jquery-jvectormap-world-mill-en.js"></script>
  <script>
    jQuery.noConflict();
    jQuery(function(){
      var $ = jQuery;

      $('#focus-single').click(function(){
        $('#map1').vectorMap('set', 'focus', {region: 'AU', animate: true});
      });
      $('#focus-multiple').click(function(){
        $('#map1').vectorMap('set', 'focus', {regions: ['AU', 'JP'], animate: true});
      });
      $('#focus-coords').click(function(){
        $('#map1').vectorMap('set', 'focus', {scale: 7, lat: 35, lng: 33, animate: true});
      });
      $('#focus-init').click(function(){
        $('#map1').vectorMap('set', 'focus', {scale: 1, x: 0.5, y: 0.5, animate: true});
      });

      colors = {};

      colors['ba'] = '#F9573B';

      $('#map1').vectorMap({
        map: 'world_mill_en',
        backgroundColor: '#1677B4',
        panOnDrag: true,
        focusOn: {
          x: 0.5,
          y: 0.5,
          scale: 1,
          animate: true
        },
        series: {
          regions: [{
            scale: ['#C8EEFF', '#0071A4'],
            normalizeFunction: 'polynomial',
            values: {

            }
          }]
        }
      });
      
      $('#map').usmap({
        stateStyles: {fill: 'blue'}
      });
      
    })
  </script>
</head>
<body>
  <div id="map1" style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"></div>

  <div id="search_button">
    <image id="search_image" class="class" src="map/images/magnifier.png"></image>
  </div>

  <div id="search_bar">
    sadsadsa
  </div>



  <!--
  <button id="focus-single">Focus on Australia</button>
  <button id="focus-multiple">Focus on Australia and Japan</button>
  <button id="focus-coords">Focus on Cyprus</button>
  <button id="focus-init">Return to the initial state</button> -->
</body>
</html>