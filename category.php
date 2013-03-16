<?php get_header(); ?>
                    <div class="row-fluid category-block">
                        <div class="span12">
                        <?php $cat_id = get_query_var('cat'); ?>
                            <h3><a href='<?php echo get_category_link($cat_id); ?>'><?php single_cat_title(); ?></a></h3>
                            <?php echo category_description(); ?>
                        </div>
                    </div><!--/.row-fluid-->
                </div><!--./span5-->
                <div class="span6 offset1">
                    <?php foreach ( get_posts( array( 'category' => 'black-and-white' ) ) as $post ): ?>        
                    <div class="row-fluid image-block image-block-category cf">
                        <div class="span8">
                            <h4><a href='<?php the_permalink(); ?>'><?php echo $post->post_title; ?></a></h4>
                        </div>
                        <div class="span4">
                        	<a href='<?php the_permalink(); ?>'>
                            	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' ); ?>
                                <img src="<?php echo $image[0]; ?>" />
                        	</a>
                        </div>
                    </div><!--/.row-fluid-->
                    <?php endforeach; ?>
                </div><!--/.span6-->
                
            </div><!--/.main-block-->
            
<?php get_footer(); ?>
