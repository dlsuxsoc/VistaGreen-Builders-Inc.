<?php
	function add_theme_scripts_styles() {
		global $post;

		if( is_page() || is_single() )
		{	
			wp_enqueue_style( 'general.css', get_template_directory_uri() . '/css/general.css' );
			switch($post->post_name) // Post/Page slug used, not the Title
			{
				// case '1-home':
					// wp_enqueue_script('home', get_template_directory_uri() . '/js/home.js', array('jquery'), '', false);
                    // wp_enqueue_style( '1home.css', get_template_directory_uri() . '/css/1home.css' );
                    // break;
			}
		} 
	}

	add_action('wp_enqueue_scripts', 'add_theme_scripts_styles');
    // register_nav_menus(array(
        // 'nav' => __('NavBar')
    // ));
	
	if( !defined(THEME_IMG_PATH)){
		define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images' );
	}
?>