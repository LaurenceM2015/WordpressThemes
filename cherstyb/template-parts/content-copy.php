<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Landing_Page
 */
	$section_blog_subheading	= get_field('section_blog_subheading');
	$section_blog_description	= get_field('section_blog_description');
	$section_blog_mp4_video		= get_field('section_blog_mp4_video');
	$section_blog_image 		= get_field('section_blog_image');
	$section_blog_image_title	= get_field('section_blog_image_title');
	$section_blog_image_two 	= get_field('section_blog_image_two');
?>

<article class="feature-box single-card card mb-5" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="card-body">
		<header class="entry-header">
			<?php
			/*if ( is_singular() ) :
				the_title( '<h4 class="entry-title card-title feature-box__text">', '</h4>' );
			else :
				the_title( '<h4 class="entry-title card-title feature-box__text"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			endif; */

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
						cherstyb_posted_on();
						cherstyb_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			

			
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cherstyb' ),
					'after'  => '</div>',
				) );
				
			?>
		</div><!-- .entry-content -->

	</div> <!-- .card-body -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'cherstyb' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
