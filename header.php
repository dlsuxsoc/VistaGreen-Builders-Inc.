<!DOCTYPE html>
<html 
	<head lang ="en">
		<title>Vistagreen Builders Inc.</title>
		
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<!-- Bootstrap -->	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet" />
		
		
		<?php wp_head(); ?>		
	</head>

	<body>		
		<nav class="navbar navbar-expand-lg navbar-light fixed-top greenNavBar" id = "navBar">
			<div class="container">
				<!-- Responsive navBar (collapsible menu) -->
				<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navBarCollapsibleOptions" aria-controls="navBarCollapsibleOptions" 
						aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse ml-5" id="navBarCollapsibleOptions">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item"><a class="nav-link" href="<?php echo(site_url()) ?>"><b>HOME</b></a></li>
					</ul>
					
				</div>
			</div>
		</nav>