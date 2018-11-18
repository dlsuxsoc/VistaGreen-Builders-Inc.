<!DOCTYPE html>
<html 
	<head>
		<title>VistaGreen Builders Inc.</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- FontAwesome -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		
		<?php wp_head(); ?>		
	</head>

	<body>
	
		<nav id = "navBar" class = "menuBar navbar navbar-inverse">
			<div class = "container">
				<div>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" id = 'collapsibleButton'>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					<span>
						<a class="navbar-brand" href="http://wordpress.local/wordpress/">
							<img src="<?php echo ASSETS_PATH; ?>/images/vg-logo.png" alt="" width = "250px"/>
						</a>
					</span>
				</div>
				
				<div class="collapse navbar-collapse navbar-right" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="#"><b>ABOUT</b></a></li>
						<li><a href="#"><b>LINE OF BUSINESS</b></a></li>
						<li><a href="#"><b>PROJECTS</b></a></li>
						<li><a href="#"><b>CONTACT US</b></a></li>
					</ul>
				</div>
			</div>
		</nav>
		
