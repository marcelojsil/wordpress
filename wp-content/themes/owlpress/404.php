<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package OwlPress
 */

get_header();
?>
<section id="section404" class="section404 st-py-default">
	<div class="container">
		<div class="row">
			<div class="col-lg-11 col-md-12 col-12 mx-lg-auto">
				<div class="card404">
					<div class="card404-inner">
						<div class="card404main">	
							<h1><?php echo esc_html_e('404','owlpress'); ?></h1>    
							
							<p><?php echo esc_html_e('Uh oh! Looks like you got lost','owlpress'); ?>.<br><?php echo esc_html_e('Go back to the homepage if you dare!','owlpress'); ?></p> 
							
							<div class="card404-btn mt-4">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-border-primary btn-shape"><?php echo esc_html_e('Back to Home','owlpress'); ?></a>
							</div>	
							
							<div class="lg-shape404_1"></div>
							<div class="lg-shape404_2"></div>
							<div class="lg-shape404_3"></div>
							<div class="lg-shape404_4"></div>
							<div class="lg-shape404_5"></div>
							<div class="lg-shape404_6"></div>
							<div class="lg-shape404_7"></div>
							<div class="lg-shape404_8"></div>
							<div class="lg-shape404_9"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
