<?php

// Įjungiame post thumbnail

add_theme_support( 'post-thumbnails' );

// Apsibrėžiame stiliaus failus ir skriptus

if( !defined('ASSETS_URL') ) {
	define('ASSETS_URL', get_bloginfo('template_url'));
}

function theme_scripts(){

    if ( !is_admin() ) {

		wp_deregister_script('jquery');
		
		// <!-- JS AND PLUGINS -->
		// <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>
		// <script src="assets/js/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
		// <script src="assets/js/main.js"></script>

		
		// wp_register_script(handle, kelias_iki_failo, dependency, versija, ar_krauti_i_footeri);
		wp_register_script('jquery', ASSETS_URL . '/assets/js/jquery/jquery-3.3.1.min.js"', false, '3.3.1', true);
		wp_register_script('owl-carousel', ASSETS_URL . '/assets/js/OwlCarousel2-2.3.4/dist/owl.carousel.js', array('jquery'), false, true);
        wp_register_script('js_main', ASSETS_URL . '/assets/js/main.js', array('jquery'), '1.0', true);
	   
		wp_enqueue_script('jquery');
		wp_enqueue_script('owl-carousel');
		wp_enqueue_script('js_main');
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_stylesheets(){

	$styles_path = ASSETS_URL . '/assets/css/main.css';

	if( $styles_path ) {

		// <link rel="stylesheet" href="assets/js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
		// <link rel="stylesheet" href="assets/js/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
		// <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		// <link rel="stylesheet" href="assets/css/style.css">
	
		// registravimas
		// wp_register_style(handle, path to the file, dependency, failo versija, irenginai kuriems skirtas failas)
		
		// iskvietimas
		// wp_enqueue_style('handle')

		wp_register_style('owl', 		ASSETS_URL . '/assets/js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css', array(), false, 'all');
		wp_register_style('owl-theme', 	ASSETS_URL . '/assets/js/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css', array(), false, 'all');
		wp_register_style('fa', 		ASSETS_URL . 'https://use.fontawesome.com/releases/v5.7.2/css/all.css', array(), false, 'all');
		wp_register_style('gfonts', 	ASSETS_URL . 'https://fonts.googleapis.com/css?family=Cinzel|Roboto', array(), false, 'all');
		wp_register_style('main-css', 	ASSETS_URL . '/assets/css/style.css', array(), false, 'all');
		
		wp_enqueue_style('owl');
		wp_enqueue_style('owl-theme');
		wp_enqueue_style('fa');
		wp_enqueue_style('gfonts');
		wp_enqueue_style('main-css');

	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas

function register_theme_menus() {
   
	register_nav_menus(array( 
        'primary-navigation' => __( 'Primary Navigation' ) 
    ));
}

add_action( 'init', 'register_theme_menus' );

// Apibrėžiame widgets juostas

#$sidebars = array( 'Footer Widgets', 'Blog Widgets' );

if( isset($sidebars) && !empty($sidebars) ) {

	foreach( $sidebars as $sidebar ) {

		if( empty($sidebar) ) continue;

		$id = sanitize_title($sidebar);

		register_sidebar(array(
			'name' => $sidebar,
			'id' => $id,
			'description' => $sidebar,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
}

// Custom posts

$themePostTypes = array(
//'Testimonials' => 'Testimonial'

);

function createPostTypes() {

	global $themePostTypes;
 
	$defaultArgs = array(
		'taxonomies' => array('category'), // uncomment this line to enable custom post type categories
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		#'menu_icon' => '',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true, // to enable archive page, disabled to avoid conflicts with page permalinks
		'menu_position' => null,
		'can_export' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', /*'custom-fields', 'author', 'excerpt', 'comments'*/ ),
	);

	foreach( $themePostTypes as $postType => $postTypeSingular ) {

		$myArgs = $defaultArgs;
		$slug = 'vcs-starter' . '-' . sanitize_title( $postType );
		$labels = makePostTypeLabels( $postType, $postTypeSingular );
		$myArgs['labels'] = $labels;
		$myArgs['rewrite'] = array( 'slug' => $slug, 'with_front' => true );
		$functionName = 'postType' . $postType . 'Vars';

		if( function_exists($functionName) ) {
			
			$customVars = call_user_func($functionName);

			if( is_array($customVars) && !empty($customVars) ) {
				$myArgs = array_merge($myArgs, $customVars);
			}
		}

		register_post_type( $postType, $myArgs );

	}
}

if( isset( $themePostTypes ) && !empty( $themePostTypes ) && is_array( $themePostTypes ) ) {
	add_action('init', 'createPostTypes', 0 );
}


function makePostTypeLabels( $name, $nameSingular ) {

	return array(
		'name' => _x($name, 'post type general name'),
		'singular_name' => _x($nameSingular, 'post type singular name'),
		'add_new' => _x('Add New', 'Example item'),
		'add_new_item' => __('Add New '.$nameSingular),
		'edit_item' => __('Edit '.$nameSingular),
		'new_item' => __('New '.$nameSingular),
		'view_item' => __('View '.$nameSingular),
		'search_items' => __('Search '.$name),
		'not_found' => __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Bin'),
		'parent_item_colon' => ''
	);
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

// adding new image sizes
// add_image_size('name', width, height, whether_crop_or_not)
add_image_size('logo', 937, 521, false);

?>