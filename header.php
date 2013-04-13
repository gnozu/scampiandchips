<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
        <link rel='stylesheet' id='bootstrap-css' href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css' type='text/css' media='all' />
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.5/bootstrap-lightbox.min.css' type='text/css' media='all' />
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/styles/scampiandchips.min.css' type='text/css' media='all' />
        <!-- wordpress head functions -->
        <?php wp_head(); ?>
        <!-- end of wordpress head -->
    </head>
    
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="container-fluid">
            <div class="row-fluid main-block">
                <div class="span5">
                    <header>
                        <div class="row-fluid">
                            <div class="span12 title-block">
                              <h1><a href="/"><?php bloginfo('title'); ?></a></h1>
                            </div>
                        </div><!--/.row-fluid-->
                    </header>