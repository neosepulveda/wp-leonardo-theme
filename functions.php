<?php 
add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );
/**
 * Register and load font awesome CSS files using a CDN.
 *
 * @link   http://www.bootstrapcdn.com/#fontawesome
 * @author FAT Media
 */
function prefix_enqueue_awesome() {
	wp_enqueue_style( 'prefix-font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), '4.3.0' );
}

//BOOTSTRAP INTEGRATION
function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}


add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
//THUMBNAILS

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1000, 571 );
add_image_size( 'single-post-thumbnail', 500, 287, true); // Permalink thumbnail size
	
	

//GOOGLE ANALYTICS
add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() { ?>
	<!--Paste your Google Analytics code from Step 4 here-->
<?php }
	
?>