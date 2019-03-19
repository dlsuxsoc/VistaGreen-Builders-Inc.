
<?php
	/* Template Name: careers
	 */
	get_header();
?>
	<div class="block section text-center container-fluid" id = "careersSection">	
		<div class ='container'>
			<h3 class = "text-success"><strong>CAREERS</strong></h3>
			<br><br>
			
			<div class = "row">
				<?php
					if (strpos($_SERVER['REQUEST_URI'], 'vbi') !== false): 
						$myposts = get_posts( 
							array( 'category_name' => 'vbiCareers', 
								   'posts_per_page' => -1, 
								   'order' => 'post_date')  );
								   
				    elseif (strpos($_SERVER['REQUEST_URI'], 'vc') !== false): 
						$myposts = get_posts( 
							array( 'category_name' => 'vcCareers', 
								   'posts_per_page' => -1, 
								   'order' => 'post_date')  );
					endif;
					
					if ( $myposts ) : 
						foreach ( $myposts as $post ) : 
							setup_postdata( $post );
							echo(the_content()); 
						endforeach; 
					?>
					<!-- Nothing to display -->	
			<?php 
					endif; 
					wp_reset_query();
			?>	
							
				<div class="jobOffering col-lg-6">
					<h3 class = "text-success">PORAC, PAMPANGA<br></h3>
					<strong>[POSITIONS]</strong>
				</div>

				<div class="jobOffering col-lg-6">
					<h3 class = "text-success">TUGUEGARAO<br></h3>
					<strong>[POSITIONS]</strong>
				</div>
						
				<div class="jobOffering col-lg-6">
					<h3 class = "text-success">BATANGAS</h3>
					<strong>[POSITIONS]</strong>
				</div>
				
				<div class="jobOffering col-lg-6">
					<h3 class = "text-success">LEYTE<br></h3>
					<strong>[POSITIONS]</strong>
				</div>
			</div>
				
			
		</div>
	</div>	
	
<?php
	get_footer();
?>
