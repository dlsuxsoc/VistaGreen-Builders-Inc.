<?php
	function add_theme_scripts_styles() {
		global $post;

		if( is_page() || is_single() )
		{	
			wp_enqueue_style( 'general.css', get_template_directory_uri() . '/css/general.css' );
			switch($post->post_name) // Post/Page slug used, not the Title
			{
				case 'vc':
					// wp_enqueue_script('home', get_template_directory_uri() . '/js/home.js', array('jquery'), '', false);
                    wp_enqueue_style( 'vc.css', get_template_directory_uri() . '/css/vc.css' );
                    break;
			}
		} 
	}

	add_action('wp_enqueue_scripts', 'add_theme_scripts_styles');
    // register_nav_menus(array(
        // 'nav' => __('NavBar')
    // ));
	
	if( !defined(ASSETS_PATH)){
		define( 'ASSETS_PATH', get_stylesheet_directory_uri() . '/assets/' );
	}
	/*  <img src="<?php echo ASSETS_PATH; ?>/images/FileName.png" alt=""/>	*/

?>