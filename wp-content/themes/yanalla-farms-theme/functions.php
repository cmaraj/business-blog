<?php 
/*
*
* @package yanalla farms
* @since 1.0.0
*
*/

function vet_styles_scripts() {
   
    wp_enqueue_style( 'style', get_stylesheet_uri() ); //required to run theme
     //styles enqueues the file stlye.css, get it from its place
     wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css', false, '1.0', 'all');
     wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/styles.css', false, '1.0', 'all');
    //scripts        filename vv here                          path to folder vv
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'vet_styles_scripts' );

function theme_setup(){

        /** automatic feed link*/
        add_theme_support( 'automatic-feed-links' );
 
        /** title tag **/
        add_theme_support( 'title-tag' );

    /**post formats */ 
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
        
    /**post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');

    add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

     /** title-tag **/
 add_theme_support( 'title-tag' );
 /** HTML5 support **/
 add_theme_support( 'html5', array( 'comment-list', 'comment-form',
'search-form', 'gallery', 'caption' ) );
 /** refresh widgest **/
 add_theme_support( 'customize-selective-refresh-widgets' );
 /** custom background **/
    $bg_defaults = array(
        'default-image' => '',
        'default-preset' => 'default',
        'default-size' => 'cover',
        'default-repeat' => 'no-repeat',
        'default-attachment' => 'scroll',
    );
 add_theme_support( 'custom-background', $bg_defaults );
 /** custom header **/
    $header_defaults = array(
        'default-image' => '',
        'width' => 300,
        'height' => 60,
        'flex-height' => true,
        'flex-width' => true,
        'default-text-color' => '',
        'header-text' => true,
        'uploads' => true,
    );
 add_theme_support( 'custom-header', $header_defaults );
 /** custom logo **/
 add_theme_support( 'custom-logo', array(
    'height' => 60,
    'width' => 400,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => array( 'site-title', 'site-description' ),
 ) );

}
add_action('after_setup_theme', 'theme_setup');

/** REGISTER MENUS */
//this menu function will allow for multiple menus :)
function register_menus() { 
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu',

            //footer menus - we will go over these next class - added here in advance!
            'footer-menu' => 'Footer Menu',
            // 'footer-community' => 'Footer Menu - Community',
            // 'footer-resources' => 'Footer Menu - Resources',
        )
    ); 
}
add_action( 'init', 'register_menus' );


// widget register
$yanallafarm = array(
    '/widgets.php', // Register widget area.
    );
    foreach ( $yanallafarm as $file ) {
    $filepath = locate_template( 'inc' . $file );
    if ( ! $filepath ) {
    trigger_error( sprintf( 'Error locating /inc%s for inclusion',
   $file ), E_USER_ERROR );
    }
    require_once $filepath;
    }
    add_action( 'widgets_init', 'yanalla_widgets_init' );
 if ( ! function_exists( 'yanalla_widgets_init' ) ) {
 /**
 * Initializes themes widgets.
 */
 function yanalla_widgets_init() {
    register_sidebar(
        array(
        'name' => __( 'Footer Full', 'yanalla'
    ),
        'id' => 'footerfull',
        'description' => __( 'Full sized footer widget with
    dynamic grid', 'yanalla' ),
        'before_widget' => '<div id="%1$s" class="footerwidget %2$s dynamic-classes">',
        'after_widget' => '</div><!-- .footer-widget -->',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        )
        );
    }
    }

