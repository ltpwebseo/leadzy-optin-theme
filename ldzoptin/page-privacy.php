<?php
/*
	Template Name: Privacy Policy
*/

get_header();
?>

<div class="jumbotron page-title">
	<div class="container">
        <div class="row">
            
            <h2><?php the_title(); ?></h2>
            
        </div>
    </div>
</div>	
    

	<!-- 
    	===============================================
    	CONTENT  
        ===============================================
    --->

	<div id="main" class="container content">
    	<div class="row">
        	<div id="privacy" class="col-md-12">
            
            	<h2>Privacy Policy</h2>
                    <p>This Privacy Policy explains why we collect certain information and how we protect your personal privacy within our web site. What follows discloses how we gather and disseminate data for the web site located at the URL <strong><?php bloginfo('name'); ?></strong></p>
                    
                    <p>We encourage you to fully understand your rights by reading this Privacy Policy as well as our Terms of Use. <?php bloginfo('name'); ?> reserves the right at any time and without notice to change this Privacy Policy simply by posting changes on our site. Any change is effective upon posting.</p>
                    
                    <p>To demonstrate our commitment to your privacy, this Privacy Policy notifies you of:</p>
                    <ol>
                        <li>What personally identifiable information of yours is collected through the site;</li>
                        <li>Who collects such information;</li>
                        <li>How such information is used;</li>
                        <li>With whom your information may be shared;</li>
                        <li>What choices you have regarding collection, use, and distribution of your information;</li>
                        <li>What kind of security procedures are in place to protect the loss, misuse or alteration of information under our control; and</li>
                        <li>How you can correct any inaccuracies in your information.</li>
                    </ol>
                    
                    <h3>What Information We Collect and How We Use That Information</h3>
                    <p>Our registration forms require users to give us contact information that may include name, email address, format preference (HTML vs. Text), address, interests, and similar information. We do not request or store sensitive information from our visitors, such as credit card or social security numbers.</p>
                    
                    <h3>Internet Protocol Address</h3>
                    <p>We collect an IP address from all visitors to our site. An IP address is a number automatically assigned to your computer when you use the Internet. We use IP addresses to help diagnose problems with our server, administer our site, analyze trends, track users' movement, gather broad demographic information to help us improve the site, and deliver customized, personalized content. IP addresses are not linked to personally identifiable information.</p>
                    
                    <h3>Use of "Cookies"</h3>
                    <p>Our site may use cookies to enhance your experience on the site. Cookies are pieces of information that some Web sites transfer to the computer browsing that Web site. Many web sites use cookies for record-keeping. Use of cookies makes Web-surfing easier by performing certain functions such as saving your passwords, your personal preferences regarding your use of the particular Web site and to make sure you don't see the same ad repeatedly. Many consider use of cookies to be an industry standard.</p>
                    
                    <p>Your browser is probably set to accept cookies. If you prefer not to receive cookies, you can alter the configuration of your browser to refuse them. If you choose to have your browser refuse cookies, it is possible that some areas of our Site will not function properly when you view them.</p>
                    
                    <h3>Security</h3>
                    <p>All information provided to <strong><?php bloginfo('name'); ?></strong> is transmitted using SSL (Secure Socket Layer) encryption. SSL is a proven coding system that lets your browser automatically encrypt, or scramble, data before you send it to us. We also protect account information by placing it on a secure portion of our Site that is only accessible by certain qualified employees of <strong><?php bloginfo('name'); ?></strong>. Unfortunately, no data transmission over the Internet is 100% secure. While we strive to protect your information, we cannot ensure or warrant its security.</p>
                    
                    <h3>Tell-A-Friend</h3>
                    <p>If a user elects to use our referral service to inform a friend about our site, we ask them for the friend's name and email address. <strong><?php bloginfo('name'); ?></strong> will automatically send the friend a one-time email inviting them to visit the Site. <strong><?php bloginfo('name'); ?></strong> stores this information for the sole purpose of sending this one-time email.</p>
                    
                    <h3>Other Web Sites</h3>
                    <p>Our Site contains links to other Web sites. Please note that when you click on one of these links, you enter another Web site for which <strong><?php bloginfo('name'); ?></strong> has no responsibility. We encourage you to read the privacy statements on all such sites as their policies may be different than ours.</p>
                    
                    
                    <h3>Contacting Us</h3>
                    <p>If you have comments or questions about any of our policies or our website, please contact us. For information about your payment or order, please contact us at <strong><?php bloginfo('name'); ?></strong> during office hours Monday thru Friday (8a.m. - 7p.m. CST).</p>
                    
                    <h3 style="text-transform: uppercase;">Our mailing address is:</h3>
                    
                    <article id="post-<?php the_ID(); ?>"<?php post_class();  ?>>
                    	
	                	<!-- THE BASIC LOOP -->
						<?php if ( have_posts()): ?>
	                        <?php while(have_posts()): the_post(); ?>
	                            
	                            
                                <div class="container-fluid">
                                <div class="row">
                                
                                <div class="col-md-12">
                                    <article>
                                        <p class="excerpt"><?php echo the_content(); ?></p>
                                    </article>
                                </div>
                                
                                <div id="edit-entry">
									<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
                                </div>
                                
                                </div>
	                            </div>
	                        
	                        <hr style="border-bottom: 1px solid #ddd;" />		
	                        <?php endwhile; ?>
	                        
	                        
	                    <?php else: ?>
	                        <?php _e('No address entered yet...', 'ldzopt'); ?>
	                    <?php endif; ?>
                        <!-- END BASIC LOOP -->
                        
	                
	                </article> 
                    
		</div><!-- /col-md-12 -->
	</div><!-- /row -->
</div><!-- /container -->


 	<!-- 
    	===============================================
    	CUSTOM METABOX & FIELDS
        ===============================================
    --->   
    <?php
	// Step 01 - Add Meta Box Container
	function privacy_add_custom_metabox() {
		add_meta_box( 
			'privacy_meta', 			//id
			'Additional Fields', 	//title
			'privacy_meta_cb', 		//callback
			'post', 					//post type
			'normal', 				//context
			'low' 					//priority
			);	
	}
	add_action( 'add_meta_boxes', 'privacy_add_custom_metabox' );

	// Step 02 - Add Meta Box Fields
	function privacy_meta_cb( $post ) {
		
		wp_nonce_field( basename( __FILE__), 'privacy_nonce' );
		$privacy_stored_meta = get_post_meta( $post->ID );
		?>
     
		
		<!-- BEGIN HTML -->
		<h3>Additional Fields</h3>
		<div class="container-wrapper">
			
			<div class="meta-caption"><!-- Field: Mailing Address -->
				<div class="meta-th">
					<h3>Enter Mailing Address For Privacy Policy</h3>
				</div>
			</div>
			
			<div class="meta-editor" style="padding: 2% 1%;">
	 
		
				<?php
					$content = get_post_meta( $post->ID, 'mailing_address', true );
					$editor = 'mailing_address';
					$settings = array(
						'textarea_rows' => 10,
						'media_buttons' => false,
					);
					
					wp_editor( $content, $editor, $settings );
				?>
			</div>
			
			<hr style="margin-top: 20px; margin-bottom: 20px;">
			
			
		 </div><!-- /wrapper-->
			
			
		<?php
		}


	// 03 Save and Validate Field Data
	function privacy_meta_save( $post_id ) {
			//checks save status
			$is_autosave = wp_is_post_autosave( $post_id );
			$is_revision = wp_is_post_revision( $post_id );
			$is_valid_nonce = ( isset( $_POST[ 'privacy_nonce' ] ) && wp_verify_nonce( $_POST[ 'privacy_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
			
			// Exit script depending on save status
			if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
				return;
			}
			
			global $post;
			
			//submit to db
			
			if ( isset( $_POST[ 'mailing_address' ] ) ) {
				update_post_meta( $post_id, 'mailing_address',  $_POST['mailing_address'] );
			}
			
			
		}
		add_action( 'save_post', 'privacy_meta_save' );


	
		
		
	?>   

	
    
    
    
    
    
    
 
    




	<!-- 
    	===============================================
    	FOOTER
        ===============================================
    --->


<?php get_footer(); ?>