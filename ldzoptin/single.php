<?php get_header(); ?>

<div class="pageheader">
	<div class="container">
        <div class="row">
            
            <h2><?php the_title(); ?></h2>
            <small>
            	Posted on <?php the_time('F j, Y'); ?> at <?php the_time('g:i, a'); ?>
            </small>
            
        </div>
    </div>
</div>


<div class="container content">
	<div class="row">
    	<div class="col-md-8">
		<?php if( have_posts() ) : ?>
            <?php while( have_posts() ): the_post(); ?>
            	
                <?php get_template_part( 'inc/content', get_post_format() ); ?>
               
            <?php endwhile; ?>
        <?php else: ?>	
            <p>
                <?php _e('No posts found.', 'ldzopt') ?>
            </p>
        <?php endif; ?>
        
    	</div><!-- /col -->
        
        	<?php get_sidebar(); ?>
        
	</div><!-- /row -->
	
</div><!-- /content -->

<?php get_footer(); ?>