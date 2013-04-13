<?php get_header(); ?>
            
                
            </div><!--/.span5-->
            <div class="span6 offset1">
                <div class="row-fluid category-block">
                    <div class="span12">
                        <?php $categories = get_the_category(); ?>
                        <h3><a href='/category/<?php echo $categories[0]->slug; ?>'><?php echo $categories[0]->name; ?></a></h3>
                        <p><?php echo $categories[0]->description; ?></p>
                    </div>
                </div><!--/.row-fluid-->
            </div><!--/.span6-->
            
            <article>
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="row-fluid">
                    <div class="span2 title-single">
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>
                    </div>
                    <div class="span10 view-single">
                        <a data-toggle="lightbox" href="#lightbox">
                            <?php the_post_thumbnail(); ?>
                    	</a>
                    </div>
                    
                    <div id="lightbox" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
                    	<div class='lightbox-header'>
                    		<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
                    	</div>
                    	<div class='lightbox-content'>
                    		<?php the_post_thumbnail(); ?>
                    	</div>
                    </div>
                </div><!--/.row-fluid-->
                <?php endwhile; ?>
            </article>
        </div><!--/.main-block-->  
            
<?php get_footer(); ?>