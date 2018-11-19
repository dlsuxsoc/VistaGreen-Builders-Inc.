		
<!-- TODO: Add map -->
		
	<div class = "navOptionsSection" id = "contactUsSection"></div>
	<div id="map"></div>
	
	<script>
	  function initMap() {
		var myLatLng = {lat: -25.363, lng: 131.044};

		// Create a map object and specify the DOM element
		// for display.
		var map = new google.maps.Map(document.getElementById('map'), {
		  center: myLatLng,
		  zoom: 4
		});

		// Create a marker and set its position.
		var marker = new google.maps.Marker({
		  map: map,
		  position: myLatLng,
		  title: 'Hello World!'
		});
	  }

	</script>
	<!-- ...api/js?key= YOUR_KEY_HERE &callback=initmap"-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4217tuYuAr0OEV9tCKW4Ol2DgDsxjueg&callback=initMap"
		async defer></script>
		
		
		
		<footer>		
			<div class ='container'>
				<div class = 'row'>				
					<div class="col-lg-4">
						<img src="<?php echo ASSETS_PATH; ?>/icons/placeholder.png" alt="" 
							 style = "width: 25px; margin-right:10px;vertical-align:top"/>						
						<span style = "display: inline-block" class = "text-left">
							<strong>Metro Manila Address:</strong>
							
							<p><br>
								Unit B2 Guevent Building, <br>
								90 DM Guevara St.<br>
								Mandaluyong City,<br>
								Philippines
							</p>
						</span>
					</div>
									
					<div class="col-lg-4">
						<div>
							<img src="<?php echo ASSETS_PATH; ?>/icons/phone-call.png" alt="" 
								 style = "width: 25px; margin-right: 10px; vertical-align:top"/>						
							<span style = "display: inline-block" class = "text-left">
								<p>
									+63 2 501.3503 <br>
									+63 917.827.7523 <br><br>
								</p>
							</span>
						</div>
						<img src="<?php echo ASSETS_PATH; ?>/icons/envelope.png" alt="" 
							 style = "width: 25px; margin-right:10px;vertical-align:top"/>						
						<span style = "display: inline-block" class = "text-left">
							<p>
								projects@vistagreen.net <br>
								vistagreenbuildersinc@yahoo.com <br>
								vbi.engineering@yahoo.com <br>
							</p>
						</span>
					</div>
					
					<div class="col-lg-4">
						<strong>Provincial Address:</strong>
							<p>
								<br>
								Rizal St. Brgy. Candao,<br>
								Dulag, Leyte, Philippines<br>
							</p>
						</span>
					</div>
				</div>	
			</div>
		</footer>
	
		<script src="<?php echo JS_PATH; ?>/jquery.waypoints.min.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>