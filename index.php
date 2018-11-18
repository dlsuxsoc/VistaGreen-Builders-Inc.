
<?php
	/* Template Name: index
	 */
	get_header();
?>
	<!-- TODO: Add first part (banner)-->
	<!-- TODO: Add js transition navBar (colors) -->
	
    <div class="container-fluid" id = "banner">
		
	</div>
	
	<?php
		include "missionSnippet.php";
	?>	
	
	
	<div class="block text-left container-fluid " id = "aboutFeed">
		<div class ='container'>
			<div class = 'row'>				
				<div class="col-lg-6" >
					<h3 class = "text-success"><strong>ABOUT</strong></h3>
					<br>
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
					<br><br><br>
					<button type="button" class="btn btn-success" 
							id = "viewMembersBtn">VIEW MEMBERS</button>
				</div>
								
				<div class="col-lg-6 text-center">
					<img src= "https://www.w3schools.com/w3css/img_lights.jpg" alt="" 
						 style = "width: 350px;"/>		
					<br><br>
					<img src= "https://www.w3schools.com/w3css/img_lights.jpg" alt="" 
						 style = "width: 350px;"/>					
					
				</div>
			</div>	
		</div>
	</div>
	
	<div class="block text-center container-fluid " id = "lineOfBusinessFeed">	
		<div class ='container'>
			<div class = 'row'>	
				<h3 class = "text-success"><strong>LINE OF BUSINESS</strong></h3>
				<br><br>
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
	
	<div class="block lastBlock text-center container-fluid" id = "projectsFeed">	
		<div class ='container'>
			<div class = 'row'>	
				<h3 class = "text-success"><strong>PROJECTS</strong></h3>
				<br><br>
				<div class="col-lg-4">
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
				</div>	
				<div class="col-lg-4">
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
				</div>	
				<div class="col-lg-4">
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
				</div>	
			</div>
			
			<br><br><br>
			<button type="button" class="btn btn-success" 
					id = "viewProjectsButton">VIEW MORE</button>
		</div>
	</div>	
	
<?php
	get_footer();
?>
