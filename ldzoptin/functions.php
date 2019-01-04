<?php

/* 
	===========================================
	Include Stylesheets & External Scripts
	===========================================
*/
function ldzopt_theme_resources() {
	//styles
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css');
	wp_enqueue_style('style', get_stylesheet_uri() );
	wp_enqueue_style('fa', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3');
	
	//scripts
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js');
	
}
add_action('wp_enqueue_scripts', 'ldzopt_theme_resources');



//Allow Access Origin for JSON
add_filter('allowed_http_origins', 'add_allowed_origins');

function add_allowed_origins($origins) {
    $origins[] = 'https://indtexas.com';
    return $origins;
}



/* 
	===========================================
	Responsive container to embeds - style.css
	===========================================
*/

function ldzopt_responsive_vid( $html ) {
    return '<div class="video-container">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'ldzopt_responsive_vid', 10, 3 );
add_filter( 'video_embed_html', 'ldzopt_responsive_vid' ); // Jetpack




/* 
	===========================================
	PAUSE VIDEO - for modal
	===========================================
*/
function ldzopt_pause_video() {
?>
	<script>
		jQuery('#featVideo').on('hidden.bs.modal', function (e) {
  		document.getElementById("vid").innerHTML = "";
  		jQuery('#featVideo video').attr("src", jQuery("#featVideo  video").attr("src"));
		});
	</script>

<?php
}

add_action( 'wp_footer','ldzopt_pause_video', 20 );


/* 
	===========================================
	Include Theme Support
	===========================================
*/
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'html5',array('search-form') );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats',array('aside','image','video','link','gallery','audio') );
add_theme_support( 'html5',array('search-form') );
add_theme_support( 'automatic-feed-links' );
add_theme_support( "title-tag" );
add_theme_support( 'custom-logo', array(
        'height'        =>  45,
        'width'         =>  350,
        'flex-height'   =>  true,
        'flex-width'    =>  true,
        'header-text' 	=>  array( 'site-title', 'site-description' ),
    ) );

add_editor_style( 'css/custom-editor-style.css' );//Theme support for editor styles






/* 
	===========================================
	Navigation Menus
	===========================================
*/

//TOP MENU
if ( function_exists( 'wp_nav_menu' ) ) {
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'nav-menus' );
		add_action( 'init', 'register_top_menu' );
		
		function register_top_menu(){
			register_nav_menus(
				array(
					'top-navigation' => 'Top Navigation'
				));
		}
	}
}


//MAIN NAVIGATION
function register_theme_menus() {
	
	register_nav_menus(
		array(
			'main-navigation'	=> __( 'Primary Navigation' ),
			'footer-navigation'	=> __( 'Footer Navigation' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );







/* 
	===========================================
	Set up Sidebar & Footer Widget Areas
	===========================================
*/

//MAIN WIDGET AREA
if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar(array(
		'name' 			=> __( 'Main Widget Area', 'ldzopt' ),
		'id'				=> 'main-widget-area',
		'description'	=> __( 'Main Widget Area Content', 'ldzopt' ),
		'before_widget' => '<div id="%1$s">',
		'after_widget'	=> '</div>',
		'before_title'  => '<h3>',
		'after_title'	=> '</h3>'
	));
}

//FOOTER WIDGETS
if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar(array(
		'name' 			=> __( 'First Footer Area', 'ldzopt' ),
		'id'				=> 'first-widget-area',
		'description'	=> __( 'First Footer Content', 'ldzopt' ),
		'before_widget' => '<div id="%1$s">',
		'after_widget'	=> '</div>',
		'before_title'  => '<h3>',
		'after_title'	=> '</h3>'
	));
}

if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar(array(
		'name' 			=> __( 'Second Footer Area', 'ldzopt' ),
		'id'				=> 'second-widget-area',
		'description'	=> __( 'Second Footer Content', 'ldzopt' ),
		'before_widget' => '<div id="%1$s">',
		'after_widget'	=> '</div>',
		'before_title'  => '<h3>',
		'after_title'	=> '</h3>'
	));
}

if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar(array(
		'name' 			=> __( 'Third Footer Area', 'ldzopt' ),
		'id'				=> 'third-widget-area',
		'description'	=> __( 'Third Footer Content', 'ldzopt' ),
		'before_widget' => '<div id="%1$s">',
		'after_widget'	=> '</div>',
		'before_title'  => '<h3>',
		'after_title'	=> '</h3>'
	));
}
add_action( 'widgets_init', 'register_sidebar');






/* 
	===========================================
	Include Pagination
	===========================================
*/
function bp_pagination($pages = '', $range = 2) {
	$showitems = ($range * 2)+1;
	
	global $paged;
	if(empty($paged)) $paged = 1;
	
	if($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		
		if(!$pages){
			$pages = 1;
		}
	}
	
	if(1 != $pages) {
		echo '<div class="pagination">';
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
		
		for ($i=1; $i <= $pages; $i++) 
		{
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems))
			{
				echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
			}
		}
		if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>"; 
		if ($paged < $pages-1 && $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
		echo "</div>\n";
	}
	
}




/*
  =============================================	 
  INCLUDE FILES
  =============================================
*/
include ('wp-bootstrap-navwalker.php');
include('modules/ldzfields.php');
include('modules/shortcodes.php');

//require get_template_directory() . 'inc/customizer.php';





/*
  =============================================	 
  REMOVE HEAD INFO FROM VIEW SOURCE
  =============================================
*/

function rem_ver(){
	return '';
}
add_filter('the_generator', 'rem_ver' );
