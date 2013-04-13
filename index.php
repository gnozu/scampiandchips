<?php get_header(); ?>
                </div><!--/.span5-->
                <?php $categories = get_categories( array( 'hide_empty' => 0, 'orderby' => 'id' ) ); ?>
                <div class="span6 offset1 index-list">   
                    <div class="row-fluid cf">
                        <div class="span4 view image-block">
                        	<a href='category/<?php echo $categories[0]->slug; ?>'>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/category1.png" />
                                <div class="mask mask-image-1">
                                    <div class="mask-title"><h3><?php echo $categories[0]->name; ?></h3></div>
                                </div>
                        	</a>
                        </div>
                        <div class="span4 offset3 view image-block">
                        	<a href='category/<?php echo $categories[1]->slug; ?>'>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/category2.png" />
                                <div class="mask mask-image-2">
                                    <div class="mask-title"><h3><?php echo $categories[1]->name; ?></h3></div>
                                </div>
                        	</a>
                        </div>
                    </div><!--/.row-fluid-->
                    
                    <div class="row-fluid">
                        <div class="span4 view image-block">
                        	<a href='category/<?php echo $categories[2]->slug; ?>'>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/category3.png" />
                                <div class="mask mask-image-3">
                                    <div class="mask-title"><h3><?php echo $categories[2]->name; ?></h3></div>
                                </div>
                        	</a>
                        </div>
                        <div class="span4 offset3 view image-block">
                        	<a href='category/<?php echo $categories[3]->slug; ?>'>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/category4.png" />
                                <div class="mask mask-image-4">
                                    <div class="mask-title"><h3><?php echo $categories[3]->name; ?></h3></div>
                                </div>
                        	</a>
                        </div>
                    </div><!--/.row-fluid-->
                </div><!--/.span6-->
            </div><!--/.main-block-->
<?php get_footer(); ?>