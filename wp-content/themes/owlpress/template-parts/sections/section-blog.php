<?php  
	$owlpress_hs_blog 			= get_theme_mod('hs_blog','1');
	$owlpress_blog_title 		= get_theme_mod('blog_title');
	$owlpress_blog_subtitle		= get_theme_mod('blog_subtitle'); 
	$owlpress_blog_description	= get_theme_mod('blog_description');
	$owlpress_blog_display_num	= get_theme_mod('blog_display_num','6');
if($owlpress_hs_blog=='1'):	
?>	
<section id="post-section" class="post-section post-home st-py-default shapes-section bg-primary-light">
	<div class="container">
		<?php if(!empty($owlpress_blog_title) || !empty($owlpress_blog_subtitle) || !empty($owlpress_blog_description)): ?>
			<div class="row">
				<div class="col-lg-6 col-12 mx-lg-auto text-center">
					<div class="heading-default wow fadeInUp">
						<?php if(!empty($owlpress_blog_title)): ?>
							<h6><?php echo wp_kses_post($owlpress_blog_title); ?></h6>
						<?php endif; ?>	
						
						<?php if(!empty($owlpress_blog_subtitle)): ?>
							<h4><?php echo wp_kses_post($owlpress_blog_subtitle); ?></h4>
							<?php do_action('owlpress_section_seprator'); ?>
						<?php endif; ?>	
						
						<?php if(!empty($owlpress_blog_description)): ?>
							<p><?php echo wp_kses_post($owlpress_blog_description); ?></p>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="row wow fadeIn">
			<div class="col-lg-12 col-md-12 col-12">
				<div id="item02" class="item-row item-col-3">
					<?php 	
						$owlpress_blogs_args = array( 'post_type' => 'post', 'posts_per_page' => $owlpress_blog_display_num,'post__not_in'=>get_option("sticky_posts")) ; 	
						$owlpress_blog_wp_query = new WP_Query($owlpress_blogs_args);
						if($owlpress_blog_wp_query)
						{	
						while($owlpress_blog_wp_query->have_posts()):$owlpress_blog_wp_query->the_post(); 
					?>
						<div class="item">
							<?php get_template_part('template-parts/content/content','page'); ?>
						</div>
					<?php 
						endwhile; 
						}
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="lg-shape21 cliparts"><img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/clipArt/blog/shape21.png" alt="<?php echo esc_attr_e('image','owlpress'); ?>"></div>
	<div class="lg-shape22 cliparts"><img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/clipArt/blog/shape22.png" alt="<?php echo esc_attr_e('image','owlpress'); ?>"></div>
</section>
<?php endif; ?>