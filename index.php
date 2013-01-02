<?php get_header(); ?>
      

    <div class="clearfix row-fluid">
      <h1><?php bloginfo('title'); ?></h1>
      <h2><?php bloginfo('description'); ?></h2>
    </div>
    
    <div class="row-fluid">
        <div class="span2 offset2">
            <div class="photo-box">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img.jpg">
            </div><!--/photo-box-->
        </div>
        <div class="span2">
            <div class="photo-box">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img.jpg">
            </div><!--/photo-box-->
        </div>
        <div class="span2">
            <div class="photo-box">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img.jpg">
            </div><!--/photo-box-->
        </div>
        <div class="span2">
            <div class="photo-box">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img.jpg">
                </div><!--/photo-box-->
        </div><!--/span-->
    </div><!--/row-fluid-->
    
    <div class="row-fluid">
        <div class="span2 offset4">
            <div class="social-box">
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png"></a>
            </div><!--/social-box-->
        </div><!--/span-->
        <div class="span2">
            <div class="social-box">
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png"></a>
            </div><!--/social-box-->
        </div><!--/span-->
    </div><!--/row-fluid-->
        
<?php get_footer(); ?>