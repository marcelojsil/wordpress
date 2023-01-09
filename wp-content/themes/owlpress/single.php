<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OwlPress
 */

get_header();
?>
<section id="post-section" class="post-section post-home st-py-default bg-primary-light">
	<div class="container">
		<div class="row g-4">
			<div class="<?php esc_attr(owlpress_post_layout()); ?>">
				<?php if( have_posts() ): ?>
					<?php while( have_posts() ): the_post(); ?>
							<?php get_template_part('template-parts/content/content','page2'); ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php comments_template( '', true ); // show comments  ?>
			</div>
			<?php  get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
