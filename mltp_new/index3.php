<!DOCTYPE html>
<html lang="en-EN">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Leaflet.geojsonCSS demo</title>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link rel="stylesheet" href="http://yandex.st/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
	<script src="http://yandex.st/jquery/2.0.3/jquery.min.js"></script>
	<script src="http://yandex.st/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet-src.js"></script>
	<script src="../leaflet.geojsoncss.js"></script>
	<script type='text/javascript' src='js/leaflet.geojsoncss.min.js'></script>
	
	
	
	<script>
	$.ajaxSetup({ dataType: 'json' });
	</script>
	<style>
	html, body {
		height: 100%;
		margin: 0;
		padding: 10px 0;
		}

	.column {
		position: relative;
		float: left;
		width: 44%;
		height: 100%;
		margin: 0 3%;
		}

	.header {
		position: absolute;
		z-index: 10000;
		width: 100%;
		padding: 5px 10px;
		font: 18px/1.4 "Lucida Console", Monaco, monospace;
		background-color: rgba(0, 0, 0, 0.751998);
		color: #FFF;
		}

	.map {
		height: 100%;
		}

	.map .leaflet-tile-pane {
		-webkit-filter: grayscale(100%);
		   -moz-filter: grayscale(100%);
		    -ms-filter: grayscale(100%);
		     -o-filter: grayscale(100%);
		        filter: grayscale(100%);
		}
	</style>
</head>
<body>
	<div class="column column_one">
		<header class="header">OSM MAP</header>
		<div class="map"></div>
	</div>
	
	<script>
	
	
	$([1]).each(function(idx) {
		var container = $('.map').eq(idx).get(0);
		/*var map = L.map(container, {
			center: [116.3894606,39.9059947],
			zoom: 10,
			zoomControl: true,
			attributionControl: true
		});*/
		
		var map = L.map( container, {
		  center: [39.9042,116.4074],
		  zoom: 12,
		  zoomControl: false
		})
		
		

		/*NOT SUPPORTED ANY MORE
		L.tileLayer('http://t{s}maps.mail.ru/tiles/scheme/{z}/{y}/{x}.png', {
			subdomains: '0123456789'
		}).addTo(map);*/
		
		L.tileLayer( 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
		  subdomains: ['a', 'b', 'c']
		}).addTo( map );

		$.get('files/our_geojson.geojson', function(json) {
			if ( idx ) {
				L.geoJson.css(json).addTo(map);
			} else {
				L.geoJson(json).addTo(map);
			}
		});
	});
	</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter25863191 = new Ya.Metrika({id:25863191,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/25863191" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>