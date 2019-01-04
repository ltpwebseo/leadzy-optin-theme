<?php 
	get_header(); 
	
	include('inc/pageban.php');
?>



<div id="main" class="container content">

	<div class="row">
    
        <div class="col-md-8">
        <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>
            
            	<?php get_template_part( 'inc/content', get_post_format() ); ?>
            
            <?php endwhile; ?>
        <?php else: ?>
            <p>
                <?php _e('No posts found.', 'ldzopt') ?>
            </p>
            
            <?php
            //Call Pagination Function to insert page navigation
            global $wp_query;
            
            $big = 999999999;
            
            echo paginate_links(array(
                'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_aquery_var('paged') ),
                'total' => $wp_query->max_num_pages
            ));
            
            ?>
            
        <?php endif; ?>
        </div><!-- /col -->
        
        
        <?php get_sidebar(); ?> <!-- /col -->
    
    </div><!-- /row -->
    
</div><!-- /container -->



<?php get_footer(); ?>