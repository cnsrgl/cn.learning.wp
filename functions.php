<?php 

function canweb_scripts() {
    wp_enqueue_style( 'bootstrap-style', 
    'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawesome-style', 
    'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
    wp_enqueue_style( 'cndesign-style', get_template_directory_uri() . '/style.css' );


    wp_enqueue_script('jquery',
    'https://code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery'), '', true);
    wp_enqueue_script('popper-js',
    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',array('jquery'),'', true);
    wp_enqueue_script('bootstrap-js',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',array('jquery'),'', true);

    wp_enqueue_script('jquery-min', get_template_directory_uri() . 
    '/js/jquery.min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . 
    '/js/jquery.easing.min.js', array('jquery'), '', true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . 
    '/js/maincs', array('jquery'), '', true);

  }
add_action('wp_enqueue_scripts','canweb_scripts');

// Hide Admin Bar

function remove_admin_bar() {
  show_admin_bar( false );
}
add_action('after_setup_theme', 'remove_admin_bar');



/////////////////////////////////////
// // Css + Directory
/////////////////////////////////////


function route() {
    $linkcn = get_template_directory_uri();


echo "
<style>
/* ------------------------

# Hero Special CSS

---------------------------*/

#hero {
    text-align: left;
    background: url('$linkcn/img/bg2.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    overflow: hidden;
}

/* ------------------------

# Page  Special CSS

---------------------------*/
#page {
    text-align: left;
    background: url('$linkcn/img/bg2.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    overflow: hidden;
}


/* ------------------------

# Fonts CSS

---------------------------*/


@font-face {
    font-family: 'SFUIText';
    src: url('$linkcn/css/fonts/SFUIText-Bold.woff2') format('woff2'),
        url('$linkcn/css/fonts/SFUIText-Bold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
}

@font-face {
    font-family: 'SFUIText';
    src: url('$linkcn/css/fonts/SFUIText-Medium.woff2') format('woff2'),
        url('$linkcn/css/fonts/SFUIText-Medium.woff') format('woff');
    font-weight: 500;
    font-style: normal;
}

@font-face {
    font-family: 'SFUIText';
    src: url('$linkcn/css/fonts/SFUIText-Semibold.woff2') format('woff2'),
        url('$linkcn/css/fonts/SFUIText-Semibold.woff') format('woff');
    font-weight: 600;
    font-style: normal;
}

@font-face {
    font-family: 'SFUIText';
    src: url('$linkcn/css/fonts/SFUIText-Heavy.woff2') format('woff2'),
        url('$linkcn/css/fonts/SFUIText-Heavy.woff') format('woff');
    font-weight: 900;
    font-style: normal;
}

@font-face {
    font-family: 'SFUIText';
    src: url('$linkcn/css/fonts/SFUIText-Regular.woff2') format('woff2'),
        url('$linkcn/css/fonts/SFUIText-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
</style>
";
}

add_action( 'wp_head', 'route' );





/////////////////////////////////////
// For Menu---Thank You Github :)
/////////////////////////////////////

 
require_once('class-wp-bootstrap-navwalker.php');

//

Function register_cnweb_menu() {
    register_nav_menu( 'primary', __('Primary Menu') );
}
add_action('init','register_cnweb_menu');




/////////////////////////////////////
// Register Thumbnails
/////////////////////////////////////
 
if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1000, 600, true );
add_image_size( 'cnweb-post-thumb', 1000, 600, true );
add_image_size( 'cnweb-medium-thumb', 450, 270, true );
add_image_size( 'cnweb-mid-thumb', 300, 180, true );
add_image_size( 'cnweb-small-thumb', 80, 80, true );
}


// Enable Custom Logo
function cnweb_customlogo(){
    add_theme_support( 'custom-logo', apply_filters( 'businessx_custom_logo___options', array(
        'height'      => 100,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title' ) )) );
    
}

add_action( 'after_setup_theme', 'cnweb_customlogo' );

?>