<?php
add_action( 'after_setup_theme', 'pct_fn_setup', 50 );

function pct_fn_setup(){
    add_action( 'wp_enqueue_scripts', 'pct_scripts' );
    add_action('wp_enqueue_scripts', 'pct_styles');

    // This theme uses post thumbnails
    add_theme_support( 'post-thumbnails' );

    set_post_thumbnail_size( 300, 300, true ); 									// Normal post thumbnails

    add_image_size( 'pct_fn_thumb-1000-1000', 1000, 1000, true);		// Portfolio Categories
    add_image_size( 'pct_fn_thumb-1000-9999', 1000, 9999, false);		// Portfolio Page
    add_image_size( 'pct_fn_thumb-300-300', 300, 300, true);			// Clients, Commentary

    // CONSTANT
    $my_theme 		= wp_get_theme( 'pct' );
    $version		= '1.0.0';
    if ( $my_theme->exists() ){
        $version 	= (string)$my_theme->get( 'Version' );
    }
    $version		= 'ver_'.$version;
    define('PCT_VERSION', $version);
    define('PCT_THEME_URL', get_template_directory_uri());
    
}

// =============================================================
//     ENQUEUE SCRIPTS
// =============================================================
function pct_scripts() {
    wp_enqueue_script('pct-fn-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), PCT_VERSION, TRUE);
    wp_enqueue_script('pct-fn-jsa', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), PCT_VERSION, TRUE);
    wp_enqueue_script('pct-fn-init', get_template_directory_uri() . '/assets/js/init.js', array('jquery'), PCT_VERSION, TRUE);

    wp_enqueue_script('pct-fn-lightgallery', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/lightgallery.min.js', array('jquery'), PCT_VERSION, TRUE);

    wp_enqueue_script('pct-fn-lightgallery2', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/zoom/lg-zoom.min.js', array('jquery'), PCT_VERSION, TRUE);

    wp_enqueue_script('pct-fn-lightgallery3', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/thumbnail/lg-thumbnail.min.js', array('jquery'), PCT_VERSION, TRUE);

    wp_enqueue_script('pct-fn-lightgallery4', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/video/lg-video.min.js', array('jquery'), PCT_VERSION, TRUE);

}



// ===========================================================
//     ENQUEUE STYLES
// ===========================================================
function pct_styles(){
    wp_enqueue_style('pct-fn-base', get_template_directory_uri().'/assets/css/base.css', array(), PCT_VERSION, 'all');
    wp_enqueue_style('pct-fn-plugins', get_template_directory_uri().'/assets/css/plugins.css', array(), PCT_VERSION, 'all');
    wp_enqueue_style('pct-fn-skeleton', get_template_directory_uri().'/assets/css/skeleton.css', array(), PCT_VERSION, 'all');
    wp_enqueue_style('fontello', get_template_directory_uri().'/assets/css/fontello.css', array(), PCT_VERSION, 'all');
    wp_enqueue_style('pct-style', get_template_directory_uri().'/assets/css/style.css', array(), PCT_VERSION, 'all');

    wp_enqueue_style('pct-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i', array(), PCT_VERSION, 'all');
}



// =============================================================
//     EXPORT 
// =============================================================
if(!function_exists('load_my_script')){
    function load_my_script() {
        global $post;
        $deps = array('jquery');
        $version= '1.0'; 
        $in_footer = true;
        wp_enqueue_script('my-script', get_stylesheet_directory_uri() . '/assets/js/my-script.js', $deps, $version, $in_footer);
        wp_localize_script('my-script', 'my_script_vars', array(
                'postID' => $post->ID
            )
        );
    }
}
add_action('wp_enqueue_scripts', 'load_my_script');


add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );

add_theme_support('automatic-feed-links');