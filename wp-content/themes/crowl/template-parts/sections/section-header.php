<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif; ?>

<!--===// Start: Main Header
=================================-->
<header id="main-header" class="main-header">
	<!--===// Start: Navigation Wrapper
	=================================-->
	<div class="navigation-wrapper">
		<!--===// Start: Main Desktop Navigation
		=================================-->
		<div class="main-navigation-area d-none d-lg-block">
			<div class="main-navigation <?php echo esc_attr(owlpress_sticky_menu()); ?>">
				<div class="container">
					<div class="row">
						<div class="col-3 my-auto">
							<div class="logo">
								<?php
								if(has_custom_logo())
									{	
										the_custom_logo();
									}
									else { 
									?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
										<h4 class="site-title">
											<?php 
												echo esc_html(bloginfo('name'));
											?>
										</h4>
									</a>	
								<?php 						
									}
								?>
								<?php
									$crowl_site_desc = get_bloginfo( 'description');
									if ($crowl_site_desc) : ?>
										<p class="site-description"><?php echo esc_html($crowl_site_desc); ?></p>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-9 my-auto">
							<nav class="navbar-area">
								<div class="main-navbar">
									<?php 
										wp_nav_menu( 
										array(  
											'theme_location' => 'primary_menu',
											'container'  => '',
											'menu_class' => 'main-menu',
											'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
											'walker' => new WP_Bootstrap_Navwalker()
											 ) 
										);
									?>
								</div>
								<div class="main-menu-right">
									<ul class="menu-right-list">
										<?php 
										do_action('owlpress_header_social');	 
										$crowl_hs_hdr_btn  =	get_theme_mod('hs_hdr_btn','1');
										$crowl_hdr_btn_lbl =	get_theme_mod('hdr_btn_lbl');
										$crowl_hdr_btn_url =	get_theme_mod('hdr_btn_url');
										$crowl_hdr_btn_open_new_tab  = get_theme_mod('hdr_btn_open_new_tab','');
										if($crowl_hs_hdr_btn=='1'  && !empty($crowl_hdr_btn_lbl)):
										?>
											<li class="button-area">
												<a href="<?php echo esc_url( $crowl_hdr_btn_url ); ?>" <?php if($crowl_hdr_btn_open_new_tab == '1'): echo esc_attr("target='_blank'"); endif;?> class="btn btn-border-primary btn-shape"><?php echo esc_html( $crowl_hdr_btn_lbl ); ?></a>
											</li>
										<?php endif; ?>
									</ul>                            
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--===// End:  Main Desktop Navigation
		=================================-->
		<!--===// Start: Main Mobile Navigation
		=================================-->
		<div class="main-mobile-nav <?php echo esc_attr(owlpress_sticky_menu()); ?>"> 
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="main-mobile-menu">
							<div class="mobile-logo">
								<div class="logo">
									<?php
										if(has_custom_logo())
											{	
												the_custom_logo();
											}
											else { 
											?>
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
												<h4 class="site-title">
													<?php 
														echo esc_html(bloginfo('name'));
													?>
												</h4>
											</a>	
										<?php 						
											}
										?>
										<?php
											$crowl_site_desc = get_bloginfo( 'description');
											if ($crowl_site_desc) : ?>
												<p class="site-description"><?php echo esc_html($crowl_site_desc); ?></p>
										<?php endif; ?>
								</div>
							</div>
							<div class="menu-collapse-wrap">
								<div class="hamburger-menu">
									<button type="button" class="menu-collapsed" aria-label="<?php echo esc_attr_e('Menu Collaped','crowl'); ?>">
										<div class="top-bun"></div>
										<div class="meat"></div>
										<div class="bottom-bun"></div>
									</button>
								</div>
							</div>
							<div class="main-mobile-wrapper" tabindex="0">
								<div id="mobile-menu-build" class="main-mobile-build">
									<button type="button" class="header-close-menu close-style" aria-label="<?php echo esc_attr_e('Header Close Menu','crowl'); ?>"></button>
								</div>
							</div>
							<div class="header-above-btn">
								<button type="button" class="header-above-collapse" aria-label="<?php echo esc_attr_e('Header Above Collapse','crowl'); ?>"><span></span></button>
							</div>
							<div class="header-above-wrapper">
								<div id="header-above-bar" class="header-above-bar"></div>
							</div>
						</div>
					</div>
				</div>
			</div>        
		</div>
		<!--===// End: Main Mobile Navigation
		=================================-->
	</div>
	<!--===// End: Navigation Wrapper
	=================================-->
	<!--===// Start: Header Above
	=================================-->
	<?php do_action('owlpress_below_header'); ?>
	<!--===// End: Header Top
	=================================-->
</header>