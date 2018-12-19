<?php
	function add_theme_scripts_styles() {
		global $post;

		if( is_page() || is_single() )
		{	
			wp_enqueue_style( 'general.css', get_template_directory_uri() . '/css/general.css' );
			wp_enqueue_script('general.js', get_template_directory_uri() . '/js/general.js', array('jquery'), '', false);
			switch($post->post_name) // Post/Page slug used, not the Title
			{
				case 'index':
					wp_enqueue_style( 'index.css', get_template_directory_uri() . '/css/index.css' );
                    break;
				case 'vbi':
					wp_enqueue_script('vbi.js', get_template_directory_uri() . '/js/vbi.js', array('jquery'), '', false);
                    wp_enqueue_style( 'vbi.css', get_template_directory_uri() . '/css/vbi.css' );
                    break;
				case 'vc':
					wp_enqueue_style( 'vc.css', get_template_directory_uri() . '/css/vc.css' );
                    break;
				case 'projects':
					wp_enqueue_style( 'projects.css', get_template_directory_uri() . '/css/projects.css' );
                    break;
				
			}
			
		wp_localize_script( 'general.js', 'assetsPath', ASSETS_PATH);
		} 
	}

	add_action('wp_enqueue_scripts', 'add_theme_scripts_styles');
    // register_nav_menus(array(
        // 'nav' => __('NavBar')
    // ));
	
	if( !defined(ASSETS_PATH)){
		define( 'ASSETS_PATH', get_stylesheet_directory_uri() . '/assets/' );
	}
	
	if( !defined(JS_PATH)){
		define( 'JS_PATH', get_stylesheet_directory_uri() . '/js/' );
	}
	/*  <img src="<?php echo ASSETS_PATH; ?>/images/FileName.png" alt=""/>	*/
	$assets_array = array( 'path' => ASSETS_PATH );
?>