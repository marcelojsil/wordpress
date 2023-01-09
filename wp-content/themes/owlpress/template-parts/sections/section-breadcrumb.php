<?php 
	$owlpress_hs_breadcrumb				= get_theme_mod('hs_breadcrumb','1');
	$owlpress_breadcrumb_bg_img			= get_theme_mod('breadcrumb_bg_img',esc_url(get_template_directory_uri() .'/assets/images/breadcrumbg.jpg')); 
	$owlpress_breadcrumb_back_attach	= get_theme_mod('breadcrumb_back_attach','scroll');
		
if($owlpress_hs_breadcrumb == '1') {	
?>
<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-right" style="background: url('<?php echo esc_url($owlpress_breadcrumb_bg_img); ?>') center center <?php echo esc_attr($owlpress_breadcrumb_back_attach); ?>;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb-content">
					<div class="breadcrumb-heading">
						<h3>
							<?php owlpress_breadcrumb_title();	?>
						</h3>	
					</div>
					<ol class="breadcrumb-list">
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home"></i></a></li>
					</ol>
				</div> 			
			</div>
		</div>
	</div>
</section>
<?php }else{ ?>
<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-right">
</section>
<?php } ?>	