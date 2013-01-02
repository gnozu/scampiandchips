			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
          
          <div id="widget-footer" class="clearfix row-fluid">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
            <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
            <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
            <?php endif; ?>
          </div>
					
					<nav class="clearfix">
						<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					
					<p class="attribution pull-right"><a href="http://matthewbull.net" title="matthew bull">design by matthew bull</a></p>
			
					<p class="attribution pull-left">&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div><!--/.container-fluid-->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		<?php wp_footer(); // js scripts are inserted using this function ?>
		
    

  </body>
</html>