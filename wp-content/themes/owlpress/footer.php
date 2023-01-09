</div>
<footer id="footer-section" class="footer-section main-footer">
	<?php  do_action('owlpress_above_footer');
		 if ( is_active_sidebar( 'owlpress-footer-widget-area' ) ) { ?>	
			<div class="footer-main">
				<div class="container">
					<div class="row g-4">
						<?php  dynamic_sidebar( 'owlpress-footer-widget-area' ); ?>
					</div>
				</div>
			</div>
		<?php } 
		$hs_footer_btm_support 		= get_theme_mod('hs_footer_btm_support','1');
		$footer_btm_support_icon 	= get_theme_mod('footer_btm_support_icon');
		$footer_btm_support_ttl 	= get_theme_mod('footer_btm_support_ttl');
		$footer_btm_support_text 	= get_theme_mod('footer_btm_support_text');
		$footer_copyright 			= get_theme_mod('footer_copyright','Copyright &copy; [current_year] [site_title] | Powered by [theme_author]');
		$hs_footer_payment 			= get_theme_mod('hs_footer_payment','1');
		if($hs_footer_btm_support=='1' || $hs_footer_payment=='1'  || !empty($footer_copyright)):
		?>
        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center gy-lg-0 gy-4">
                    <div class="col-lg-4 col-md-6 col-12 text-lg-left text-md-left text-center">
						<?php if($hs_footer_btm_support=='1'): ?>
							<div class="widget-left text-lg-left text-md-left text-center">
								<aside class="widget widget-contact first">
									<div class="contact-area">
										<?php if(empty($footer_btm_support_icon)): ?>
											<div class="contact-icon"><svg xmlns="http://www.w3.org/2000/svg" width="37" height="37"><path fill-rule="evenodd" fill="var(--bs-primary)" d="m36.594 36.241-6.093-5.643c-.615-1.042-2.031-.808-2.031-.808s-17.808-.069-19.496 0c-1.688.072-1.625-1.209-1.625-1.209l-.406-4.029 24.37-.404.407-16.123v-.403s2.335-.049 3.655 0C36.696 7.671 37 9.637 37 9.637l-.406 26.604Zm-8.936-17.736c-.063.944-1.219.806-1.219.806l-14.622.404s-2.773.073-3.249 0c-1.481-.233-2.844 1.208-2.844 1.208l-5.28 6.45-.406.403S.364 4.19.038 2.381C-.288.573 1.256.367 1.256.367S25.08.08 26.439.367c1.359.285.813 1.612.813 1.612s.469 15.583.406 16.526Z"/></svg></div>
										<?php else: ?>
											<div class="contact-icon">
												<i class="fa <?php echo esc_attr($footer_btm_support_icon); ?>"></i>
											</div>
										<?php endif; ?>
										<div class="contact-info">
											<?php if(!empty($footer_btm_support_ttl)): ?>
												<h6 class="title"><?php echo wp_kses_post($footer_btm_support_ttl); ?></h6>
											<?php endif; ?>
											
											<?php if(!empty($footer_btm_support_text)): ?>
												<p class="text"><?php echo wp_kses_post($footer_btm_support_text); ?></p>
											<?php endif; ?>
										</div>
									</div>
								</aside>
							</div>
						<?php endif; ?>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 text-lg-center text-md-center text-center">
                        <div class="widget-center text-lg-center text-md-center text-center">
                            <?php if ( ! empty( $footer_copyright ) ){ 				
									$owlpress_copyright_allowed_tags = array(
										'[current_year]' => date_i18n('Y'),
										'[site_title]'   => get_bloginfo('name'),
										'[theme_author]' => sprintf(__('<a href="https://burgerthemes.com/owlpress-free/">OwlPress</a>', 'owlpress')),
									);
								?>                          
								<div class="copyright-text">
									<?php
										echo apply_filters('owlpress_footer_copyright', wp_kses_post(owlpress_str_replace_assoc($owlpress_copyright_allowed_tags, $footer_copyright)));
									?>
								</div>
							<?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 text-lg-right text-md-right text-center">
                        <?php if($hs_footer_payment=='1'){ ?>
							<ul class="payment_methods">
								<?php do_action('owlpress_footer_payment_icons'); ?>
							</ul>
						<?php } ?>
                    </div>
                </div>
            </div>
        </div>
		<?php endif; ?>
    </footer>
    <!-- End: Footer
    =================================-->
	
	<button type="button" class="scrollingUp scrolling-btn" aria-label="<?php echo esc_attr_e('scrollingUp','owlpress'); ?>"><i class="fa fa-angle-up"></i></button>

</div>		
<?php wp_footer(); ?>
</body>
</html>
