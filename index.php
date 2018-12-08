
<?php
	/* Template Name: index
	 */
	get_header();
?>

    <div class="container-fluid text-light section">
		<div class = "container">

			<div class = 'row'>	
			
				<div class="col-lg-12">
					<div id = "mainLogo">
					<h3>
						<img style="width: 150px;" src ="<?php echo ASSETS_PATH; ?>/images/new-logos/VG3-02-logo.png" 
							 alt="VistaGreen BUILDERS, INC." />
						<br> 
						<strong>VISTAGREEN<br>GROUP</strong>
					</h3>
					</div>
				</div>
				
				<div class="col-lg-6">
					<a href="<?php echo(site_url()) ?>/vbi/">
						<div class = "bannerCells" id = "vbi">
							<img src="<?php echo ASSETS_PATH; ?>/images/new-logos/vistagreen-logo.png" 
							     alt="VistaGreen CORPORATION" width = "500px"/>
						</div>
					</a>
					<br><br>
					
					<a href = "">
						<div class = "bannerCells" id = "">
							<div class = "text">
								<b class = "header">VISTAGREEN REAL ESTATE<br></b>
								<b class = "subHeader">COMING SOON!</b>
							</div>
						</div>
					</a>
				</div>
				
				<div class="col-lg-6">
					<a href="<?php echo(site_url()) ?>/vc/">
						<div class = "bannerCells" id = "vc">
							<img src="<?php echo ASSETS_PATH; ?>/images/new-logos/vistacorp-logo-2.png" 
							     alt="VistaGreen CORPORATION" width = "500px"/>
		
						</div>
					</a>
					<br><br>
					<a href = "">
						<div class = "bannerCells" id = "vqo">
							<div class = "text">
								<b class = "header">VQO FOUNDATION<br></b>
								<b class = "subHeader">COMING SOON!</b>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
<?php
	get_footer();
?>
