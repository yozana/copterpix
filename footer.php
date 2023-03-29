<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package copterpix
 */


?>

<footer id="colophon" class="site-footer copterpix-footer">

    <div class="copterpix-footer section-lg-padding md-hf-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo_white.svg" alt="company logo"  />
                    <p class="text-white py-3"><?php echo get_field('footer_description', 'option') ?></p>
                    <div class="d-flex justify-content-between" style="width: 150px">
                        <a href="mailto:<?php echo get_field('company_email', 'options') ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/emailIcon_white.svg" alt="Email" /></a>
                        <a href="<?php echo get_field('company_linkedIn', 'options') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/linkedInIcon_white.svg" alt="linkedIn" /></a>
                        <a href="https://www.facebook.com/copterpixpro" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/facebook_white.svg" alt="facebook" /></a>
                    </div>
                </div>
                <div class="col-lg-1 col-sm-0"></div>
                <div class="col-md-6 col-sm-12 col-lg-2 my-4 my-md-0">
                    <div class="footer-title text-white mb-2">Quick Links</div>
                    <ul style="list-style-type: none">
                        <li><a href="/">Main</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/drone-in-a-box">Drone in a Box</a></li>
                        <li><a href="/solutions">Solutions</a></li>                                                
                        <li><a href="/client">Clients</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-2 my-4 my-md-0">
                    <div class="footer-title text-white mb-2">Our Products</div>
                    <ul style="list-style-type: none">                        
                        <li><a href="/products/ere-95-pro-max">ERE 95 Pro Max</a></li>
                        <li><a href="/products/ere-75-oz-tactical">ERE 75 Oz Tactical</a></li>
                        <li><a href="/products/ere-95-pro">ERE 95 Pro</a></li>                        
                        <li><a href="/products/ere-95-hybrid-ts">ERE 95 Hybrid TS</a></li>
                        <li><a href="/products/ere-95-mini/">ERE 95 Mini</a></li>
                        
                        
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 my-4 my-md-0">
                    <div class="footer-title text-white mb-2">Contact</div>
                    <div class="contact-footer">
                        <div class="d-flex align-items-center my-2">
                            <img class="me-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/location_icon.png" alt="address" />
                            <p class="text-white mb-0"><?php echo get_field('company_address', 'options') ?></p>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img class="me-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/phone_icon.png" alt="address" />
                            <p class="text-white mb-0"><?php echo get_field('company_phone', 'options') ?></p>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img class="me-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/email_icon.png" alt="address" />
                            <p class="text-white mb-0"><?php echo get_field('company_email', 'options') ?></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>        
    </div>		
	<!-- copterpix Main Footer End -->
	<div class="copterpix-footer-bottom py-3">
		<div class="container">
			<div class="credits d-flex justify-content-between" style="color: #B5B5B5">
                <p class="m-0" >© <?php echo date("Y"); ?> All rights reserved to CopterPix</p>
                <div class="d-block d-md-flex align-items-center my-3 my-md-0">
                    Designed by <a class="ms-1" href="https://www.iritbarton.co.il/" target="_blank" style="color: inherit">Irit Baron</a>, Developed by <a class="ms-1" href="https://connvisor.com" target="_blank" style="color: inherit"> Connvisor Digital Group</a></div>
        
            </div>
        </div>		
	</div>
<!--
    <div class="copterpix-credit-bottom">
        
    </div>
-->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>