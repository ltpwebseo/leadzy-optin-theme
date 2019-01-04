<article>
	<?php if(is_single()) : ?>
    	<h1 class="entry-title"><?php the_title(); ?></h1>
        <?php
			// Show an optional term description.
			$term_description = term_description();
			if ( ! empty( $term_description ) ) :
				printf( '<div class="taxonomy-description">%s</div>', $term_description );
			endif;
		?>
        <p class="postedin">
        	<small>
            Posted on <?php the_time('F, jS, Y'); ?>
            by <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"><?php echo get_the_author(); ?></a> |
            Posted in <?php the_category(', '); ?>  
            <?php the_tags(); ?> 
            </small>
        </p>
        
        <!-- POST THUMBNAIL -->
        <?php if( has_post_thumbnail($post->ID) ): ?>
                                	
            <img width="100%" class="img-responsive" src="<?php the_post_thumbnail_url($post->ID); ?>" alt="<?php the_title(); ?>">
        <?php  else:  ?>
            <img class="thumbnail img-responsive" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/thumbimg.jpg" alt="BLOG ARTICLE">
        <?php endif; ?>
        
        
        <!-- CONTENT -->
        <?php the_content(); ?> 
        
	<?php else: ?>
    
    	<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="col-md-3">
        
        <!-- POST THUMBNAIL -->
        <?php if( has_post_thumbnail($post->ID) ): ?>
                                	
            <img width="100%" class="img-responsive" src="<?php the_post_thumbnail_url($post->ID); ?>" alt="<?php the_title(); ?>">
        <?php  else:  ?>
            <img class="thumbnail img-responsive" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/thumbimg.jpg" alt="BLOG ARTICLE">
        <?php endif; ?>
        
        </div>
        <div class="col-md-9">
			<?php the_excerpt(); ?>
            <p>
            	<a class="btn btn-default" href="<?php the_permalink(); ?>" role="button">Read more &raquo;</a>
            </p>
        </div>
            
    <?php endif; ?>
    
        <?php wp_reset_postdata(); ?>
        
        <div>
        
            <?php edit_post_link('Edit this entry.', '<small>', '</small>'); ?>
        </div>
    	<hr />
</article>