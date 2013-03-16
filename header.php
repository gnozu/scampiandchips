<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <title>
          <?php if ( !is_front_page() ) { echo wp_title( ' ', true, 'left' ); echo ' | '; }
          echo bloginfo( 'name' ); echo ' - '; bloginfo( 'description', 'display' );  ?> 
        </title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel='stylesheet' id='bootstrap-css'  href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bootstrap-css'  href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.5/bootstrap-lightbox.min.css' type='text/css' media='all' />
        <!-- wordpress head functions -->
        <?php wp_head(); ?>
        <!-- end of wordpress head -->
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="row-fluid main-block">
                <div class="span5">
                    <header>
                        <div class="row-fluid">
                            <div class="span12 title-block">
                              <h1><a href="/"><?php bloginfo('title'); ?></a></h1>
                            </div>
                        </div><!--/.row-fluid-->
                        
                        <div class="row-fluid subtitle-block">
                            <div class="span12">
                              <h2><?php bloginfo('description'); ?></h2>
                            </div>
                        </div><!--/.row-fluid-->
                        
                        <div class="row-fluid link-block">
                            <div class="span12">
                                <ul>
                                    <li><a href="http://matthewbull.etsy.com">tumblr</a></li>
                                    <li><a href="http://matthewbull.etsy.com">facebook</a></li>
                                    <li><a href="http://matthewbull.etsy.com">etsy</a></li>
                                    <li class="last"><a href="http://matthewbull.net">blog</a></li>
                                </ul>
                            </div>
                        </div><!--/.row-fluid-->
                    </header>