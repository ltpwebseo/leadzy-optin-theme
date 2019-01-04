<?php 

/**
 * Template Name: One-Column
 *
 * 
 */

get_header(); 

include('inc/pageban.php');
?>



<div id="main" class="container content">
	<div class="row">
    	<div class="md-col-12">
			<?php if( have_posts() ) : ?>
                <?php while( have_posts() ): the_post(); ?>
                	<article>
                        <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p class="excerpt"><?php the_content(); ?></p>
                            
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
    </div><!-- /row -->
</div><!-- /container -->

<?php get_footer(); ?>