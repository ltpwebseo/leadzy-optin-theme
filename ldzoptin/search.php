<?php 
	get_header(); 
	
	include('inc/pageban.php');
?>


<div class="container content">
	<div class="row">
    
		<div class="search-form-container">
			<?php get_search_form(); ?>
        </div>
       
        
		<?php if( have_posts() ) : ?>
            <?php while( have_posts() ): the_post(); ?>
            	<article>
                	 <h3>Search Results:</h3>
                    <div class="post-thumbnail">
                        <?php
                            if ( has_post_thumbnail() ) { 
                            the_post_thumbnail('thumbnail'); 
                            }
                        ?>	
                    </div>
                    <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <p class="excerpt"><?php the_excerpt(); ?></p>
                        
                    <?php 
                        // clean up after our query
                        wp_reset_postdata(); 
                    ?>
                    
                    <div class="">
                        <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
                    </div>
                
                </article>
            <?php endwhile; ?>
        <?php else: ?>	
            <p>
                <?php _e('No posts found.') ?>
            </p>
        <?php endif; ?>
        <p>
        <!-- Pagination -->
                    <?php
                        global $wp_query;
                                
                        $big = 999999999; // need an unlikely integer
                                
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $wp_query->max_num_pages
                            ) );
                    ?>
        <!-- /Pagination -->		
        </p>
    
    
    
    </div><!-- /row -->
    
    
    
</div><!-- /container content -->
<?php get_footer(); ?>