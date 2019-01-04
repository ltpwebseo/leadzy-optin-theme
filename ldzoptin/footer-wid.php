        <div id="prefooter" class="container-fluid">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-4">
                    	<?php if ( dynamic_sidebar('first-widget-area') ) : ?>
                        	<?php dynamic_sidebar('first-widget-area'); ?>
						<?php else : ?>
                        	<h3>First Footer Area</h3>
                            <p>Go to <b>Appearance</b> => <b>Widgets</b> to edit this section or delete it.</p>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-4">
                        <?php if ( dynamic_sidebar('second-widget-area') ) : ?>
                        	<?php dynamic_sidebar('second-widget-area'); ?>
						<?php else : ?>
                        	<h3>Second Footer Area</h3>
                            <p>Go to <b>Appearance</b> => <b>Widgets</b> to edit this section or delete it.</p>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-4">
                        <?php if ( dynamic_sidebar('third-widget-area') ) : ?>
                        	<?php dynamic_sidebar('third-widget-area'); ?>
						<?php else : ?>
                        	<h3>Third Footer Area</h3>
                            <p>Go to <b>Appearance</b> => <b>Widgets</b> to edit this section or delete it.</p>
                        <?php endif; ?>
                    </div>
                    
                </div>
            </div>
            
        </div>
   		<footer class="container-fluid">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-6">
                    	<p>&copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> <?php bloginfo('name'); ?></p>
                    </div>
                    <div class="col-md-6">
                    	<p style="float: right;"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/logo2.png" alt="" /></p>
                    </div>
                </div>
            </div>
        </footer>

   
		<?php wp_footer(); ?>
	</body>

</html>