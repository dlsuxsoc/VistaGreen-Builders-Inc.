
<?php
	/* Template Name: accreditations
	 */
	get_header();
?>
	<div class="block section text-center container-fluid" id = "accreditationsSection">	
		<div class ='container'>
			<h3 class = "text-success"><strong>ELIGIBILITY AND ACCREDITATIONS</strong></h3>
			<br><br>
			
			<div class = "row threePanelItems">
				<?php
					$myposts = get_posts( 
						array( 'category_name' => 'accreditations', 
							   'tags' => 'vbi',
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
	
<?php
	get_footer();
?>
