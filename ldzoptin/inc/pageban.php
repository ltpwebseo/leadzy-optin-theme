<div class="container-fluid blog-header">
    <div class="row">
    	<div class="container">
        <div id="pageban" class="col-md-12">
     
            <h2 class="page-title">
					<?php 
						if ( is_category() ) : echo single_cat_title() . ' Category';

						elseif ( is_tag() ) :
							echo  single_tag_title() . ' Tag';

						elseif ( is_archive() ) : echo the_archive_title() . ' Posts';

						
						elseif(get_field('ban_title')) : echo the_field('ban_title'); 

						else : 

							echo wp_title(''); echo '  ';

						endif;
					?>
				</h2>
				<p><?php the_archive_description(); ?></p>
        
        </div> 
        </div><!-- -->
    </div>
</div>