<?php

add_theme_support( 'post-thumbnails' ); 

// enqueue javascript
function theme_js(){
  wp_deregister_script('jquery'); // initiate the function
  wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, 'latest');
  wp_register_script('modernizr', get_template_directory_uri().'/js/modernizr.min.js');
  
  wp_enqueue_script('jquery');
  wp_enqueue_script('modernizr', array('jQuery'), '1.1', true);
}
add_action('wp_footer', 'theme_js');