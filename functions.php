<?php
/////////////////////////////////////////////////////////////////////////
function elearning_theme_scripts() {
    // wp_enqueue_style( 'style', get_stylesheet_uri());
    // wp_enqueue_style( 'style', get_stylesheet_uri());

    wp_enqueue_style( 'style',get_template_directory_uri(). '/style.css');


    wp_enqueue_style( 'open-iconic',get_template_directory_uri(). '/css/open-iconic-bootstrap.min.css');
    
    wp_enqueue_style( 'animate',get_template_directory_uri(). '/css/animate.css');

    // wp_enqueue_style( 'carousel',get_template_directory_uri(). '/css/owl.carousel.min.css');

    wp_enqueue_style( 'theme-default',get_template_directory_uri(). '/css/owl.theme.default.min.css');
 
    wp_enqueue_style( 'magnific',get_template_directory_uri(). '/css/magnific-popup.css');

    wp_enqueue_style( 'aos',get_template_directory_uri(). '/css/aos.css');

    wp_enqueue_style( 'datepicker',get_template_directory_uri(). '/css/bootstrap-datepicker.css');

    wp_enqueue_style( 'timepicker',get_template_directory_uri(). '/css/jquery.timepicker.css');

    wp_enqueue_style( 'flaticon',get_template_directory_uri(). '/css/flaticon.css');

    wp_enqueue_style( 'iconmoon',get_template_directory_uri(). '/css/icomoon.css');

    wp_enqueue_style( 'ionicons',get_template_directory_uri(). '/css/ionicons.min.css');

//////////////////////////////////////////////////////////////////////////////////

wp_enqueue_script('jquery');
// wp_enqueue_script( 'jquery-oad',get_template_directory_uri(). '/js/jquery.min.js');

// wp_enqueue_script( 'jquery-dowload',get_template_directory_uri(). '/js/jquery-migrate-3.0.1.min.js');
    //******************************************** */  caresole script for css ******************************* 

    //******************************************** */  caresole script ******************************* 
wp_enqueue_script( 'owl-caresole-js',get_template_directory_uri(). '/owl-caresole/owl.carousel.min.js');


wp_enqueue_script( 'script',get_template_directory_uri(). '/js/allscript.js');

wp_enqueue_script( 'main',get_template_directory_uri(). '/js/main.js');

wp_enqueue_script( 'js-popper',get_template_directory_uri(). '/js/popper.min.js');

wp_enqueue_script( 'js-bootstrap',get_template_directory_uri(). '/js/bootstrap.min.js');

wp_enqueue_script( 'jquery-easing',get_template_directory_uri(). '/js/jquery.easing.1.3.js');

wp_enqueue_script( 'jquery-waypoints',get_template_directory_uri(). '/js/jquery.waypoints.min.js');

wp_enqueue_script( 'jquery-stellar',get_template_directory_uri(). '/js/jquery.stellar.min.js');

// wp_enqueue_script( 'owl-carousel',get_template_directory_uri(). '/js/owl.carousel.min.js');

wp_enqueue_script( 'js-aos',get_template_directory_uri(). '/js/aos.js');

wp_enqueue_script( 'jquery-magnific-popup',get_template_directory_uri(). '/js/jquery.animateNumber.min.js');

wp_enqueue_script( 'bootstrap-datepicker',get_template_directory_uri(). '/js/bootstrap-datepicker.js');

wp_enqueue_script( 'scrollax-min',get_template_directory_uri(). '/js/scrollax.min.js');

wp_enqueue_script( 'jquery-magnific-popup',get_template_directory_uri(). '/js/jquery.magnific-popup.min.js');

wp_enqueue_script( 'map',get_template_directory_uri(). 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false');

wp_enqueue_script( 'map-js',get_template_directory_uri(). '/js/google-map.js');


 }
 add_action('wp_enqueue_scripts', 'elearning_theme_scripts');


 ////////////////////////////////////////////////////////////////////////
    //   theme suport 
//////////////////////////////////////////////////////////////////
function mh_theme_setup(){

    // theme title tag /////////////////

add_theme_support( 'title-tag' );
    
    // add theme  custome logo/////////////////////
    add_theme_support( 'custom-logo', array(
        'height' =>80,
        'width'  => 300,
    ) );

///add theme thumanails/////////////////////
add_theme_support( 'post-thumbnails' );
  

add_image_size( 'homeFeatured',600, 300, array('center','center') );

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );  
  
// register menu //////////////////////////


register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'mh' ),
    // 'secondary' => __( 'Secondary Menu', 'myfirsttheme' )
) );

//******************************************************** */
// theme support custome header ***********************
//********************************************************************//    
$args = array(
    'default-image'      => get_template_directory_uri() . '/images/bg_1.jpg',
    'default-text-color' => '000',
    'width'              => 1000,
    'height'             => 250,
    'flex-width'         => true,
    'flex-height'        => true,
);
add_theme_support( 'custom-header', $args );

//***************************************************************** */
// add woo-commerce support and compatible ==========================/
//====================================================================//
add_theme_support( 'woocommerce' );

add_theme_support( 'woocommerce', array(
    'thumbnail_image_width' => 150,
    'single_image_width'    => 300,

    'product_grid'          => array(
        'default_rows'    => 3,
        'min_rows'        => 2,
        'max_rows'        => 8,
        'default_columns' => 4,
        'min_columns'     => 2,
        'max_columns'     => 5,
    ),
) );

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );






// $post_details = array(
//     'post_title'    => 'demo register',
//   //   'post_content'  => 'Content of your page',
//     'post_status'   => 'publish',
//     'post_author'   => 1,
//     'post_type' => 'page'
//      );
//     //  wp_insert_post( $post_details );
}
add_action('after_setup_theme','mh_theme_setup');



 //////////////////////////////////////////////////////////////////////////////
require get_template_directory() . './inc/caresole.php';

require get_template_directory() . './inc/services.php';

require get_template_directory() . './inc/customize.php'; 

require get_template_directory() . './inc/ourteam.php';

require get_template_directory() . './inc/pricing.php';

require get_template_directory() . './inc/pricingmetabox.php';

require get_template_directory() . './inc/review-section.php';

require get_template_directory() . './inc/reviewmetabox.php';

require get_template_directory() . './inc/blogpost.php';

// require get_template_directory() . './inc/services-temp.php';


//==================================================================================
//*//////////////////// register widget ///////////////////////////////////////////
//================================================================================

add_action( 'widgets_init', 'e_education_register_sidebars' );
function e_education_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'sidebar-main',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s" style="padding-left:60px;padding-right:60px;align-item:center;" >',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title wid-title " >',
            'after_title'   => '</h4>',
        )
    );

    // ****************************************footer widget support *************************
    register_sidebar(
        array(
            'id'            => 'fo-widget-1',
            'name'          => __( 'footer widget-1' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s" style="padding-left:60px;padding-right:60px;align-item:center;" >',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title wid-title " >',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'fo-widget-2',
            'name'          => __( 'footer widget-2' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s" style="padding-left:60px;padding-right:60px;align-item:center;" >',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title wid-title " >',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'fo-widget-3',
            'name'          => __( 'footer widget-3' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s" style="padding-left:60px;padding-right:60px;align-item:center;" >',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title wid-title " >',
            'after_title'   => '</h4>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

///////////////////////////////////////////////////////////////////////////
//<<==========================>>|| popular tags ||<<=============================>> 
function wpb_tag_cloud() { 
    $tags = get_tags();
    $args = array(
        'smallest'                  => 10, 
        'largest'                   => 22,
        'unit'                      => 'px', 
        'number'                    => 10,  
        'format'                    => 'flat',
        'separator'                 => " ",
        'orderby'                   => 'count', 
        'order'                     => 'DESC',
        'show_count'                => 1,
        'echo'                      => false
    ); 
     
    $tag_string = wp_generate_tag_cloud( $tags, $args );
     
    return $tag_string; 
     
    } 
    // Add a shortcode so that we can use it in widgets, posts, and pages
    add_shortcode('wpb_popular_tags', 'wpb_tag_cloud'); 
     
    // Enable shortcode execution in text widget
    add_filter ('widget_text', 'do_shortcode'); 



/**
  * My_Custom_Recent_Posts widget class
  *
  */
  add_filter('widget_posts_args', 'widget_posts_args_add_custom_type'); 
  function widget_posts_args_add_custom_type($params) {
     $params['post_type'] = array('post','myblog');
     return $params;
  }

///////////////////////////////////////////////////////
//    expert using number set 
function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


//=======================================================================
// /******************************* */ read more button add using fillter
//=========================================================================

function new_excerpt_more($more) {
    global $post;
    return '<p><a href="'.get_permalink($post->ID).'" class="btn btn-primary btn-outline-primary">Read more</a></p>';
    // return '<a class="moretag" 
    // href="'. get_permalink($post->ID) . '">Your Read More Link Text</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');

//=============================================================================
   ///register page programmically in wordpress ///////////////////////
//===========================================================================
function Register_page_function()
{
   $post_details = array(
  'post_title'    => 'Home',
//   'post_content'  => 'Content of your page',
  'post_status'   => 'publish',
  'post_author'   => 1,
  'post_type' => 'page'
   );
   wp_insert_post( $post_details );
}
// regiester_page_function();
register_activation_hook(__FILE__, 'Register_page_function');


