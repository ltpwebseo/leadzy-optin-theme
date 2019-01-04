<article class="post post-aside">
	<div class="well">
    	<h3><?php the_title(); ?></h3>
    	<small><?php the_author(); ?> @ <?php the_date(); ?></small>
        <?php the_content(); ?>
        <p><a href="<?php the_permalink(); ?>">Read more &raquo; </a></p>
    </div>
</article>