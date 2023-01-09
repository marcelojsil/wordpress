<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OwlPress
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-items blog-single'); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<figure class="post-image">
			<?php the_post_thumbnail(); ?>
			<div class="post-hover"><a href="<?php echo esc_url(the_permalink()); ?>"><i class="fa fa-share"></i></a></div>
		</figure>
	<?php endif; ?>	
	<div class="post-content">
		<div class="post-meta">
			<span class="post-date">
				<i class="fa fa-calendar"></i> <a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><?php echo esc_html(get_the_date('j')).' '. esc_html(get_the_date('M')).','. esc_html(get_the_date(' Y')); ?></a>
			</span>
			<span class="author-name">
				<i class="fa fa-user"></i> <?php echo esc_html_e('By','owlpress'); ?> <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php esc_html(the_author()); ?></a>
			</span>
			<span class="post-list">
				<i class="fa fa-folder-open-o"></i> <a href="<?php echo esc_url(get_permalink());?>"><?php the_category(', '); ?></a>
			</span>
			<span class="comment">
				<i class="fa fa-comments-o"></i> <a href="javascript:void(0);"><?php echo esc_html(get_comments_number($post->ID)); ?> <?php echo esc_html_e('Comments','owlpress'); ?></a>
			</span>
		</div>
		<div class="post-content-bottom">
			<?php
				if ( is_single() ) :

					the_title('<h3 class="post-title">', '</h3>' );
					
				else:
					
					the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
					
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