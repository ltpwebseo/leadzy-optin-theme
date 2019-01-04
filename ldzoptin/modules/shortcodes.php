<?php
/* 
	===========================================
	SHORTCODES 
	===========================================
*/


// CTA BUTTON - [learn_more href=""]
function button_url_shortcode( $atts) {
	
	//Attributes
	$atts = shortcode_atts(
		array(
			'href'  => '',
			'class' => 'btn-primary'
		),
	$atts,
	'learn_more'
	);
	
	//Code Returned
	return '<a href="' . $atts['href'] . '" class="btn ' . $atts['class'] . '">Learn More</a><br><br>';
	
}
add_shortcode( 'learn_more', 'button_url_shortcode' );




// CTA BUTTON - [buy href=""]
function button_buy_shortcode( $atts) {
	
	//Attributes
	$atts = shortcode_atts(
		array(
			'href' => ''
		),
	$atts,
	'buy'
	);
	
	//Code Returned
	return '<a href="' . $atts['href'] . '" class="btn btn-success">BUY NOW</a><br><br>';
	
}
add_shortcode( 'buy', 'button_buy_shortcode' );





// VIDEO EMBED - [video_embed src="" width="" height=""]
function video_embed_shortcode( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'src' => '',
			'width' => '',
			'height' => '',
		),
		$atts,
		'video_embed'
	);

	// Return custom embed code
	return '<embed 
	         src="' . $atts['src'] . '"
	         width="' . $atts['width'] . '"
	         height="' . $atts['height'] . '"
	         type="application/x-shockwave-flash"
	         allowscriptaccess="always"
	         allowfullscreen="true">';

}
add_shortcode( 'video_embed', 'video_embed_shortcode' );





// RANDOM QUOTES BY CAT - [quote]
function random_quote_shortcode() {
	
	// Attributes
	$atts = shortcode_atts(
		array(
			'posts' => '1',
			'post_type' => 'post',
			'category_name' => 'quotes',
			'orderby' 		=> 'rand'
		),
		$atts,
		'quote'
	);
	
	// Query
	$the_query = new WP_Query( array ( 'posts_per_page' => $atts['posts'] ) );
	
	// Posts
	$output = '<h3 class="quotetitle">Quote for: ' . get_the_date() . '</h3>';
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		$output .= '<div id="quote" style="margin-top:20px">';
		$output .= '<h5>' . get_the_title() . '</h5>';
		$output .= '<blockquote><span class="quotesize">"</span>' . get_the_content() . '</blockquote>';
		$output .= '</div>';
	endwhile;
	
	
	// Reset post data
	wp_reset_postdata();
	
	// Return code
	return $output;

	//  User needs to create a category called 'quotes'	
	
}	
add_shortcode('quote', 'random_quote_shortcode');





// RECENT POSTS LIST - [recent-posts posts="5"]
function recent_posts_shortcode( $atts , $content = null ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'posts' => '5',
		),
		$atts,
		'recent-posts'
	);

	// Query
	$the_query = new WP_Query( array ( 'posts_per_page' => $atts['posts'] ) );
	
	// Posts
	$output = '<h4>Recent Posts</h4><ul>';
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		$output .= '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
	endwhile;
	$output .= '</ul>';
	
	// Reset post data
	wp_reset_postdata();
	
	// Return code
	return $output;

}
add_shortcode( 'recent-posts', 'recent_posts_shortcode' );



//LOREM IPSUM
function lorem_ipsum($atts) {
	
	$lorem = "<h2>Lorem Ipsum Dummy Title</h2><p>Lorem ipsum dummy text. Phasellus sollicitudin nisi at mauris scelerisque scelerisque. Praesent sit amet ex molestie, volutpat tellus ac, placerat ante. Cras dapibus ullamcorper posuere. Sed eu tortor feugiat, malesuada magna vel, convallis metus. Aliquam risus metus, aliquam eget vehicula a, ultricies eget lacus. Curabitur ipsum risus, lacinia lobortis est ut, pellentesque dictum urna. Maecenas consequat ornare ante lacinia gravida. <p>Nulla sagittis sem vitae libero efficitur, pretium rhoncus massa aliquam. Curabitur fringilla erat odio, sed ullamcorper dui feugiat et. Mauris dapibus, est maximus tincidunt condimentum, lectus ipsum facilisis justo, non fringilla nibh arcu quis ante. Praesent at felis sed nisi euismod tempor malesuada non purus. Sed lobortis placerat nibh. In hac habitasse platea dictumst.</p>";
	
	shortcode_atts(
		array(
			'repeat'	=> 1
		), $atts
	);
	
	return str_repeat( $lorem, $atts['repeat'] );
	
}
add_shortcode( 'lorem-ipsum', 'lorem_ipsum' );