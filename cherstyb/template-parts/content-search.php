<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Landing_Page
 */

?>
<!-- Romoved the original code and replaced it with the template-part/content-copy.php -->

<article class="feature-box card mb-5" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if ( has_post_thumbnail() ) { ?>

		<div class="card-img-top feature-box__img-box">
			<?php cherstyb_post_thumbnail(); ?>
		</div>

	<?php } ?>

	<header class="entry-header pt-3">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<span><?php cherstyb_posted_on(); ?></span>
			<span><?php cherstyb_posted_by(); ?></span>
			
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary card-body">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php cherstyb_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
