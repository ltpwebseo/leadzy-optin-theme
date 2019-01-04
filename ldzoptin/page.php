<?php 
	get_header();
	
	include('inc/pageban.php'); 
?>



<div class="container content">


	<div class="row">
    
    	<div class="col-md-8">
			<?php if( have_posts() ) : ?>
                <?php while( have_posts() ): the_post(); ?>
                    
                    <article><?php the_content(); ?>
                        
						<?php 
                            // clean up after our query
                            wp_reset_postdata(); 
                        ?>
                        
                        <div class="">
                            <?php edit_post_link('Edit this entry.', '<small>', '</small>'); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else: ?>	
                <p>
                    <?php _e('No posts found.', 'ldzopt') ?>
                </p>
            <?php endif; ?>
        </div><!-- /col -->
        
        <?php get_sidebar(); ?> <!-- /col -->
        
    </div><!-- /row -->
    
    
</div><!-- /container -->

<?php get_footer(); ?>