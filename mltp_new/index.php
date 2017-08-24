<!DOCTYPE HTML>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
   <head profile="http://gmpg.org/xfn/11">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

      <link rel="stylesheet" type="text/css" href="css/leaflet.css" />
	     <!-- Bootstrap -->
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
        
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <!--<script src = "https://code.jquery.com/jquery.js"></script> -->
      <script src = "js/jquery.js"></script>
	  <script src = "js/bootstrap.min.js"></script>
	  
      
      <script type='text/javascript' src='js/jquery.min.js'></script>
      <script type='text/javascript' src='js/leaflet.js'></script>
	  <script type='text/javascript' src='js/leaflet.geojsoncss.min.js'></script>
	  <!--
	  <script type='text/javascript' src='js/leaflet.ajax.min.js'></script>
	  
	  <link rel="stylesheet" href="http://yandex.st/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
	<script src="http://yandex.st/jquery/2.0.3/jquery.min.js"></script>
	<script src="http://yandex.st/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet-src.js"></script>
	<script src="../leaflet.geojsoncss.js"></script>
	-->
	
   </head>

   <body>
   
   <div class="container">
	  <div class="jumbotron">
		<h1>MacTrackz</h1>    
		
	  </div>
	  
	  
		<div class="row">
		  <div class="col-lg-4" align="center">
				<h2>Upload File (.geojson)</h2>
				
					<div class="well">
				  <form id="upload_form" enctype="multipart/form-data" method="post">
					  <!--input type="file" name="file1" id="file1" class="btn btn-primary"--><br>
					  <div class="row">
					  
						<div class="col-lg-12">
								
						  <label class="btn btn-primary" for="file1">
								<input id="file1" type="file" style="display:none;">
								<span class="glyphicon glyphicon-folder-open"></span> &nbsp;Browse
						  </label>
						</div>
					  </div>

					  
					  <br/>
					  <div class="row">
					  
						<div class="col-lg-12">

							  <!--input type="button" value="Upload" onclick="uploadFile()" class="btn btn-primary"-->
							  
							  <button type="button" onclick="uploadFile()" class="btn btn-primary">
								<span class="glyphicon glyphicon-open"></span> Upload
							  </button>
								<br/><br/>
							  
								<div class="progress">
									<progress id="progressBar" value="0" max="100" style="width:100%;"></progress>
								</div>
							  <h3 id="status" class='label label-info'></h3>
							  <p id="loaded_n_total"></p>
						

						</div>
					  </div>

					  
					  <div class="row">
					  
						<div class="col-lg-12">
								
								<!--input type="button" value="Plot" onclick="plotTraces()" class="btn btn-primary"-->
								
							  <button type="button" onclick="plotTraces()" class="btn btn-primary">
								<span class="glyphicon glyphicon-map-marker"></span> Plot
							  </button>

						</div>
					  </div>
				  
					  
				  </form>
				  </div>


		  </div>
		  <div class="col-lg-8">
					
				<div id="map" style="height: 440px; border: 1px solid #AAA;"></div>
	  
		  </div>
		</div>
	  
	  
   </div>
	   
	  	  
      <script type='text/javascript' src='files/markers.json'></script>
      <script type='text/javascript' src='js/file_uploader.js'></script>
	  <script type='text/javascript' src='page_js/parseGeoJSON.js'></script>
	  
   </body>
</html>
   