
var map = L.map( 'map', {
   center: [39.9042,116.4074],
   zoom: 10,
});

L.tileLayer( 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
  subdomains: ['a', 'b', 'c']
}).addTo( map );

function reloadMap(){
	//map.removeLayer(map);
	/*
document.getElementById('map').innerHTML = "<div id='map' style='width: <?php echo $this->width; ?>; height: <?php echo $this->height; ?>;'></div>";*/



}

function plotTraces(){
	
	reloadMap();
//alert(global_uploadFileName.name);
var polylines = new L.geoJson();
polylines.addTo(map);
var fileName = global_uploadFileName.name;
//alert(fileName);
if(fileName == null){
	alert('Please upload a file !');
	exit();
}

var URL = "files/"+fileName;

$.ajax({
dataType: "json",
url: URL,
success: function(data) {
    $(data.features).each(function(key, data) {
        polylines.addData(data);
    });
}
}).error(function() {});
}

/*
//Show Markers from /files/markers.json file
for ( var i=0; i < markers.length; ++i ) 
{
   L.marker( [markers[i].lat, markers[i].lng] )
      .bindPopup( '<a href="' + markers[i].url + '" target="_blank">' + markers[i].name + '</a>' )
      .addTo( map );
}*/

/*
//Customizable ICON Support

var myURL = jQuery( 'script[src$="parseGeoJSON.js"]' ).attr( 'src' ).replace( 'parseGeoJSON.js', '' )

var myIcon = L.icon({
  iconUrl: myURL + 'images/pin24.png',
  iconRetinaUrl: myURL + 'images/pin48.png',
  iconSize: [29, 24],
  iconAnchor: [9, 21],
  popupAnchor: [0, -14]
})

for ( var i=0; i < markers.length; ++i )
{
 L.marker( [markers[i].lat, markers[i].lng], {icon: myIcon} )
  .bindPopup( '<a href="' + markers[i].url + '" target="_blank">' + markers[i].name + '</a>' )
  .addTo( map );
}*/



