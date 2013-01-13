<?php get_header(); ?>
      

    <div class="clearfix row-fluid title-block">
      <h1><?php bloginfo('title'); ?></h1>
      <h2><?php bloginfo('description'); ?></h2>
    </div>
    
<!--
    <div class="row-fluid">
        <div class="color17">sadfsa</div>
        <div class="color13">asdAd</div>
        <div class="color14">saddfdfdf</div>
        <div class="color15">SadasDas</div>
    </div>
-->
    
    
    <div class="row-fluid image-block">
        <div class="span2 offset2">
		    <div class="main2">
	            <div class="view view-first">
	            	<a href='#'>
		                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hand.jpg" />
		                <div class="mask"></div>
	            	</a>
	            </div>
		    </div>
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