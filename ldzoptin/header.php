<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Insert other head content after this line -->
    <meta name="description" content="agency landing pages and website template">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    
    
    <?php
	if ( ! function_exists( '_wp_render_title_tag' ) ) {
		function theme_slug_render_title() {
	?>
	<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
	<?php
		}
		add_action( 'wp_head', 'theme_slug_render_title' );
	}
	?>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
    </head>
    
    <body<?php body_class(); ?>>
    
    
    <!-- Top Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
		      <?php 
             // Fix menu overlap bug..
             if ( is_admin_bar_showing() ) echo '</div><style>.navbar-inverse { top: 30px; }</style>'; 
             
           ?>
          <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ) ?>"> 
					          <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) :  the_custom_logo(); ?>
                  </a>
                    <?php else : ?>
                  <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ) ?>">
                    <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo2.png" alt="<?php bloginfo('name'); ?>">
                  </a>
                    <?php endif; ?>
                </div>
            
                <!-- Top Navigation -->
                <div id="navbar" class="navbar-collapse collapse">
                  
                  <?php
        						wp_nav_menu( array(
        							'menu' => 'navbar',
        							'theme_location' 	=> 'main-navigation',
        							'container' => false,
        							'menu_class' => 'nav navbar-nav navbar-right',
        							'fallback_cb' => 'wp_page_menu',
        							'items_wrap' 		=> '<ul id="%1$s" class="%2$s" role="menu" >%3$s</ul>',
        							'depth' => 2,
        							//Process nav sub-menu using nav walker
        							'walker' => new wp_bootstrap_navwalker())
        						);	
                  ?>
                  
                </div><!--/.navbar-collapse -->
        
      	</div><!--/.container -->
    </nav><!--/.navbar -->
    

