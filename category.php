<?php get_header(); ?>
      

    <div class="clearfix row-fluid title-block">
      <h1><a href="/"><?php bloginfo('title'); ?></a></h1>
      <h2><?php bloginfo('description'); ?></h2>
    </div>
    
    <div class="row-fluid image-block">
        <div class="span1 offset5">
		    <div class="main2">
	            <div class="view view-category">
	                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/category4.png" />
	            </div>
		    </div>
	    </div>
	    <div class="span1">
		    <div class="main2">
	            <div class="view view-category">
	                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/category4.png" />
	            </div>
		    </div>
	    </div>
    </div><!--/row-fluid-->
    
    <?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h3 class="archive-title"><?php printf( __( '%s', 'scampiandchips' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h3>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

			twentytwelve_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		

    
    
    
        
<?php get_footer(); ?>