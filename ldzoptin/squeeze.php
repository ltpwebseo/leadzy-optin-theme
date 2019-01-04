<?php 
/*
	Template Name: Squeeze Page
*/

    get_header('nonav'); 
    $sqzlogo = get_field('sqzlogo');
    $sqzmain = get_field('sqz_main_img');
?>


<!-- 
    	=====================================
    	CONTENT
    	=====================================
    -->
    <section id="content">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    			
    			<div class="container">
    				<div class="row">
    					<div class="col-sm-5">
    					    <img id="lady" class="img-responsive" src="<?php if(get_field('sqz_main_img')) : echo $sqzmain['url']; else: bloginfo('stylesheet_directory'); ?>/images/woman-arms-crossed.png<?php endif; ?>" /></p>
    						
    					</div>
    					<div class="col-sm-7">
    					    
							<p class="ldzlogo"><img id="ldzlogo" src="<?php if(get_field('sqzlogo')) : echo $sqzlogo['url']; else: bloginfo('stylesheet_directory'); ?>/images/logo.png<?php endif; ?>" /></p>
   							
   							<?php if(get_field('sqz_tag_line')) : the_field('sqz_tag_line'); else: ?>
   							<p class="sub">The <strong>ADVANCED</strong> Customer Acquisition <strong>System</strong></p>
   							<?php endif; ?>
   							
   							<?php if(get_field('sqz_head_sub')) : the_field('sqz_head_sub'); else: ?>
   							<h1>Begin <strong>Generating Leads</strong> Today in 5 easy steps</h1>
   							<p class="plead">
   								<span class="ltgreenlead">Free ebook</span> Shows you how to set up your lead generation machine and watch the leads roll in.
   							</p>
   							<?php endif; ?>
   							
   							
   							
   							<center>
   							    <p><img id="offerimg" class="img-responsive" width="200" src="<?php bloginfo('stylesheet_directory'); ?>/images/build-your-list.jpg"></p>
   								<button type="button" id="cta" class="btn btngreen" data-toggle="modal" data-target="#ctaForm">
   									Download My Copy
   								</button>
   							</center>
   							
   							
   							<!-- Modal -->
                            <div id="ctaForm" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                            
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h3 class="modal-title">Download Your Copy</h3>
                                  </div>
                                  <div class="modal-body">
                                    <p>
                                        <?php if(get_field('sqz_modal_optin')) : echo the_field('sqz_modal_optin'); else : ?>
                                        <!-- Begin Mailchimp Signup Form -->
                                        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                                        <style type="text/css">
                                        	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                                        	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                                        	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                                        </style>
                                        <div id="mc_embed_signup">
                                        <form action="https://leadzy.us1.list-manage.com/subscribe/post?u=64dca17b216eb8e2b9a54e530&amp;id=8561f03b12" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll">
                                        	<h2 id="mailtagline">Join Thousands of Marketers Who Are Generating Leads Everyday</h2>
                                        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                                        <div class="mc-field-group">
                                        	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                                        </label>
                                        	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                                        </div>
                                        <div class="mc-field-group">
                                        	<label for="mce-FNAME">First Name </label>
                                        	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                                        </div>
                                        <div class="mc-field-group">
                                        	<label for="mce-LNAME">Last Name </label>
                                        	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                                        </div>
                                        	<div id="mce-responses" class="clear">
                                        		<div class="response" id="mce-error-response" style="display:none"></div>
                                        		<div class="response" id="mce-success-response" style="display:none"></div>
                                        	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_64dca17b216eb8e2b9a54e530_8561f03b12" tabindex="-1" value=""></div>
                                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                            </div>
                                        </form>
                                        </div>
                                        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                                        <!--End mc_embed_signup-->
                                        <?php endif; ?>
                                    </p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                            
                              </div>
                            </div>
                            <!-- /Modal -->
   							
   							
    					</div>
    				</div>
    			</div>
					
					
    			</div>
    		</div>
    	</div>
    </section>
    
    
    <section id="boxes">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
    				<p id="hereiswhat">HERE IS WHAT</p>
    				<p id="showyou">I'm going to show you</p>
    				
    				<div class="container" style="margin-bottom: 70px;">
    					<div class="row">
    						<div class="col-md-3 boxtext">
    							<p class="o4x">&commat;</p>
								<p>How To Set up Your Lead Generation Tool</p>
    						</div>
    						<div class="col-md-3 boxtext">
    							<p class="o4x">&star;</p>
								<p>The Little Known Secret For Conversion</p>
    						</div>
    						<div class="col-md-3 boxtext">
    							<p class="o4x">&hearts;</p>
								<p>How To Generate ROI From Your Website</p>
    						</div>
    						<div class="col-md-3 boxtext">
    							<p class="o4x">&dollar;</p>
								<p>A Simple Strategy For Doubling Your Sales</p>
    						</div>
    					</div>
    				</div>
    				
    			</div>
    		</div>
    	</div>
    </section>


<?php get_footer(); ?>