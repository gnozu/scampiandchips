<?php get_header(); ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <article class="span6 offset1">
                    
                    <div class="row-fluid">
                        <div class="span12">
                            <?php $categories = get_the_category(); ?>
                            <h3><a href='/category/<?php echo $categories[0]->slug; ?>'><?php echo $categories[0]->name; ?></a></h3>
                        </div>
                    </div>
                    
                    <div class="row-fluid title-single">
                        <div class="span12">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                    
                    <div class="row-fluid view-single">
                        <div class="span12">
                            <a data-toggle="lightbox" href="#lightbox">
                                <?php the_post_thumbnail(); ?>
                        	</a>
                        </div>
                    </div><!--/row-fluid-->
                    
                </article><!--/span6-->
                
                <div id="lightbox" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
                	<div class='lightbox-header'>
                		<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
                	</div>
                	<div class='lightbox-content'>
                		<?php the_post_thumbnail(); ?>
                		<div class="lightbox-caption"><p><?php the_content(); ?></p></div>
                	</div>
                </div>
                
                <?php endwhile; ?>
<?php get_footer(); ?>