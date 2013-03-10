<?php

add_theme_support( 'post-thumbnails' ); 

// enqueue styles
function theme_styles()  
{ 
    // This is the compiled css file from LESS - this means you compile the LESS file locally and put it in the appropriate directory if you want to make any changes to the master bootstrap.css.
    wp_register_style( 'wp-bootstrap', get_stylesheet_directory_uri() . '/scampi.less', array(), '1.0', 'all' );
    wp_enqueue_style( 'wp-bootstrap');
}
add_action('wp_enqueue_scripts', 'theme_styles');

// enqueue javascript
function theme_js(){
  wp_deregister_script('jquery'); // initiate the function
  wp_register_script('jquery', 'http://code.jquery.com/jquery-latest.js', false, 'latest');
  //wp_register_script('wpbs-scripts', get_template_directory_uri().'/js/scampi.js');
  wp_register_script('modernizr', get_template_directory_uri().'/js/modernizr.min.js');
  
  wp_enqueue_script('jquery');
  //wp_enqueue_script('wpbs-scripts', array('jQuery'), '1.1', true);
  wp_enqueue_script('modernizr', array('jQuery'), '1.1', true);
}
add_action('wp_footer', 'theme_js');