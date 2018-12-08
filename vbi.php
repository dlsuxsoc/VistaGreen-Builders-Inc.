
<?php
	/* Template Name: vbi
	 */
	get_header();
?>


	<div class="text-light">
	
		<div class="carousel slide carousel-fade" data-ride="carousel" id = "banner">

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
					</div>
					<div class="carousel-item">
					</div>
					<div class="carousel-item">
					</div>
			</div>
			<ol class="carousel-indicators">
				<li data-target="#banner" data-slide-to="0" class="active"></li>
				<li data-target="#banner" data-slide-to="1"></li>
				<li data-target="#banner" data-slide-to="2"></li>
			</ol>
		</div>
	
		<!-- Content of the carousel -->
		<div class = "container" id = "contentCarousel">
			<div class="cta">
				<h2 id="cta-title">VISTAGREEN BUILDERS INC.</h2>
				<br>
				<p class="action-paragraph">
					(formerly ATO Builders Inc.), is a duly registered
					company with the Securities and Exchange
					Commision (SEC) and under the laws of
					the Republic of the Philippines.
				</p>
			</div>
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
				<div class="col-lg-6">
					<h3 class="text-success"><strong>ABOUT</strong></h3>
					The company was established as a
					general construction firm that offers a full range
					of preconstruction planning, engineering, and
					construction services, which anchors its
					organizational structure on a new management concept
					of high efficiency as shown by its numerous completed
					projects.

					<br><br>

					Equipped with modern technology and backed by
					professionals with varied disciplines of licensed
					engineers and architects. It has a work force of skilled
					and semi-skilled labor, equipment operators. The
					project teams maintain a strong foundation of trust
					and mutual respect generated through positive
					relationship with our clients, sub-contractors and
					suppliers. A company-wide policy encouraging shared
					perfomance responsibility ensures the highest degree
					of professional service and result on all projects
					undertaken.
					<br><br><br><br>
					<button id="viewMembersBtn" class="btn btn-success" type="button">VIEW MEMBERS</button>
				</div>
				<div class="col-lg-6 text-center">
					<img style="width: 350px;" src="<?php echo ASSETS_PATH; ?>/images/c-NKG1.png" alt="" />
					<br><br>
					<img style="width: 350px;" src="<?php echo ASSETS_PATH; ?>/images/c-Halcyon.png" alt="" />
				</div>
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
					<p class="details">
						Roads and Bridges <br>
						Land Development <br>
						Water Distribution System <br>
						Drainage & Flood Control System <br>
						Sewer System & Wastewater Treatment Plant <br>
						Irrigation System <br>
						Site Development <br>
					</p>
				</div>
				<div class="col-lg-4">
					<img src="<?php echo ASSETS_PATH; ?>/icons/enterprise.png" alt="" 
						 width = "150px"/>	
					<br><br>
					<h4 class = "text-success"><strong>Architectural Works</strong></h4>
					<br>
					<p class="details">
						Industrial Buildings <br>
						Commercial Buildings <br>
						Institutional Buildings <br>
						Residential Buildings <br>
					</p>
				</div>		
				<div class="col-lg-4">
					<img src="<?php echo ASSETS_PATH; ?>/icons/engineer.png" alt="" 
						 width = "150px"/>	
					<br><br>
					<h4 class = "text-success"><strong>Engineering Services, <br>
						Planning & Design</strong></h4>
					<br>
					<p class="details">
						Industrial Buildings and Facilities <br>
						Wastewater Treatment Plant <br>
						Construction Management <br>
						DENR ECC and LLDA Clearance application <br>
					</p>
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
						$myposts = get_posts( 
							array( 'category_name' => 'projects', 
								   'posts_per_page' => 3, 
								   'order' => 'post_date')  );
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
			<a href = "http://wordpress.local/wordpress/vbi/projects/"><button type="button" class="btn btn-success" 
					id = "viewProjectsButton">VIEW MORE</button></a>
		</div>
	</div>	
	
<?php
	get_footer();
?>
