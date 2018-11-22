
<?php
	/* Template Name: index
	 */
	get_header();
?>
	<!-- TODO: Add first part (banner)-->
	<!-- TODO: Add js transition navBar (colors) -->
	
    <div class="container-fluid text-light" id = "banner">
		<div class = "container">
			<br><br><br>
			<strong class = "text-success">VISTAGREEN BUILDERS INC.</strong> (formerly) <br>
			ATO Builders Inc.), is a duly registered <br>
			company with the Securities and Exchange <br>
			Commision (SEC) and under the laws of <br>
			the Republic of the Philippines. <br>
			
			<br><br>
			<button type="button" class="btn btn-light text-light" 
					id = "buildWithUsBtn">BUILD WITH US!</button>
		</div>
	</div>
	
	<?php
		include "missionSnippet.php";
	?>	
	
	
	<div class="block text-left container-fluid navOptionsSection" id = "aboutSection">
		<div class ='container'>
			<div class = 'row'>				
				<?php
						$myposts = get_posts( array( 'name' => 'about-feed')  );
						if ( $myposts ) : 
							foreach ( $myposts as $post ) : 
								setup_postdata( $post );
								echo(the_content()); 
							endforeach; 
						else: ?>
							<p>Sorry, no posts matched your criteria.</p>
					<?php 
						endif; 
						wp_reset_query();
					?>
			</div>	
		</div>
	</div>
	
	<div class="block text-center container-fluid navOptionsSection" id = "lineOfBusinessSection">	
		<div class ='container'>
			<h3 class = "text-success"><strong>LINE OF BUSINESS</strong></h3>
			<br><br>
			<div class = 'row'>	
				<div class="col-lg-4">
					<img src="<?php echo ASSETS_PATH; ?>/icons/bridge.png" alt="" 
						 width = "150px"/>	
					<br><br>
					<h4 class = "text-success"><strong>Civil Works</strong></h4>
					<br>
					Roads and Bridges <br>
					Land Development <br>
					Water Distribution System <br>
					Drainage & Flood Control System <br>
					Sewer System & Wastewater Treatment Plant <br>
					Irrigation System <br>
					Site Development <br>
				</div>
				<div class="col-lg-4">
					<img src="<?php echo ASSETS_PATH; ?>/icons/enterprise.png" alt="" 
						 width = "150px"/>	
					<br><br>
					<h4 class = "text-success"><strong>Architectural Works</strong></h4>
					<br>
					Industrial Buildings <br>
					Commercial Buildings <br>
					Institutional Buildings <br>
					Residential Buildings <br>
				</div>		
				<div class="col-lg-4">
					<img src="<?php echo ASSETS_PATH; ?>/icons/engineer.png" alt="" 
						 width = "150px"/>	
					<br><br>
					<h4 class = "text-success"><strong>Engineering Services, <br>
						Planning & Design</strong></h4>
					<br>
					Industrial Buildings and Facilities <br>
					Wastewater Treatment Plant <br>
					Construction Management <br>
					DENR ECC and LLDA Clearance application <br>
				</div>
			</div>	
		</div>
	</div>
	
	<div class="block lastBlock text-center container-fluid navOptionsSection" id = "projectsSection">	
		<div class ='container'>
			<h3 class = "text-success"><strong>PROJECTS</strong></h3>
			<br><br>
			<div class = 'row'>	
				<!--<div class="col-lg-4">
					<img src="https://www.w3schools.com/w3css/img_lights.jpg" alt="" 
						 width = "200px"/>	
					<br><br>
					<h4><strong>Construction of Kinpo Office-<br>
						Factory Building (Phase I)</strong></h4>
					<br>
					ID & Landscaping Block 7 Lot 1, Lima <br>
					Technology Center, Lipa City, Batangas <br>
					<br><br>
					<strong>December 15, 2017</strong>
					<p class = "text-success">₱47,000,000.00</p>
					
					<br>
					</div>-->
					<?php
						$myposts = get_posts( array( 'category_name' => 'projects')  );
						if ( $myposts ) : 
							foreach ( $myposts as $post ) : 
								setup_postdata( $post );
								echo(the_content()); 
							endforeach; 
						else: ?>
							<p>Sorry, no posts matched your criteria.</p>
					<?php 
						endif; 
						wp_reset_query();
					?>
			</div>
			
			<br><br><br>
			<button type="button" class="btn btn-success" 
					id = "viewProjectsButton">VIEW MORE</button>
		</div>
	</div>	
	
<?php
	get_footer();
?>
