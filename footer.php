			<!-- footer -->

			<div class="clear"></div>
	      </div>
	    </main>
	    <footer>
	      <div class="container">
	        <div class="legal">&copy; <?php _e('Mūsų pirmas tinklalapis', 'Didysis žalias projektas') ?> <?php echo date('Y'); ?></div>
	        <div class="social-links">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_sidebar')) ?>
	        </div>
	        <div class="clear"></div>
	      </div>
	    </footer>
		<?php wp_footer(); ?>
	  </body>
	</html>
