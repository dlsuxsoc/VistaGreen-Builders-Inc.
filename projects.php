
<?php
	/* Template Name: projects
	 */
	get_header();
?>
	<div class="block lastBlock text-center container-fluid navOptionsSection" id = "projectsSection">	
		<div class ='container'>
			<h3 class = "text-success"><strong>PROJECTS</strong></h3>
			<br><br>
			<div class = 'row' id ="projectsFeed">	
					<?php
						// function loadMore(){
							$myposts = get_posts( 
								array( 'category_name' => 'projects', 
									   // 'posts_per_page' => 9
									   'order' => 'post_date')  );
							if ( $myposts ) : 
								foreach ( $myposts as $post ) : 
									setup_postdata( $post );
									echo(the_content()); 
								endforeach; 
							else: ?>
								return "UpToDate"
					<?php 
							endif; 
							wp_reset_query();
						// }
					?>
			</div>
			
			<!--<br><br><br>
			<button type="button" class="btn btn-success" 
					id = "loadMoreProjects">LOAD MORE</button>
					-->
		</div>
	</div>	
	
<?php
	get_footer();
?>
