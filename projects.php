
<?php
	/* Template Name: projects
	 */
	get_header();
?>
	<div class="block section text-center container-fluid" id = "projectsSection">	
		<div class ='container'>
			<h3 class = "text-success"><strong>PROJECTS</strong></h3>
			<br><br>
			
			<ul class="nav nav-tabs" id="projectsTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link text-success active" id="current-tab" 
					   data-toggle="tab" href="#current" 
					   role="tab" aria-controls="current" 
					   aria-selected="false">CURRENT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-success" id="completed-tab" 
					   data-toggle="tab" href="#completed" 
					   role="tab" aria-controls="completed" 
					   aria-selected="false">COMPLETED</a>
				</li>
			</ul>
			
			<div class="tab-content" id="myTabContent">				
				<div class="tab-pane fade active show" 
					 id="current" role="tabpanel" 
					 aria-labelledby="current-tab">
					 <div class = "row">
						<?php
						
							$args = array(
								'post_type' => 'post',
								'category__not_in'=> 5,		// Category id
								'category__in'=> 4,
							    'posts_per_page' => -1, // query ALL posts
								'order' => 'post_date'
							);
							$query = new WP_Query( $args );
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
								  $query->the_post();
								  echo(the_content()); 
								}
							} 
							wp_reset_postdata();
						?>	
					</div>
				</div>
				
				<div class="tab-pane fade" 
					 id="completed" role="tabpanel" 
					 aria-labelledby="completed-tab">
					 <div class = "row">
						<?php
								$myposts = get_posts( 
									array( 'category_name' => 'completed', 
										   'posts_per_page' => -1, // query ALL posts
										   'order' => 'post_date')  );
								if ( $myposts ) : 
									foreach ( $myposts as $post ) : 
										setup_postdata( $post );
										echo(the_content()); 
									endforeach; 
								else: ?>
								<!-- Nothing to display -->	
						<?php 
								endif; 
								wp_reset_query();
						?>	
					</div>
				</div>
			</div>
			
		</div>
	</div>	
	
<?php
	get_footer();
?>
