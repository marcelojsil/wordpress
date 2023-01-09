<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OwlPress
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-items'); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<figure class="post-image">
			<?php the_post_thumbnail(); ?>
			<div class="post-hover"><a href="<?php echo esc_url(the_permalink()); ?>"><i class="fa fa-share"></i></a></div>
		</figure>
	<?php endif; ?>	
	<div class="post-content">
		<div class="post-meta">
			<span class="post-date">
				<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><?php echo esc_html(get_the_date('j')).' '. esc_html(get_the_date('M')).','. esc_html(get_the_date(' Y')); ?></a>
			</span>
			<span class="author-name">
				<i class="fa fa-user"></i> <?php echo esc_html_e('By','owlpress'); ?> <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php esc_html(the_author()); ?></a>
			</span>
		</div>
		<div class="post-content-bottom">
			<?php
				if ( is_single() ) :

					the_title('<h6 class="post-title">', '</h6>' );
					
				else:
					
					the_title( sprintf( '<h6 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h6>' );
					
				endif; 
				
				the_content( 
						sprintf( 
							__( 'Read More', 'owlpress' ), 
							'<span class="screen-reader-text">  '.esc_html(get_the_title()).'</span>' 
						) 
					);
			?>
		</div>
	</div>
</article>