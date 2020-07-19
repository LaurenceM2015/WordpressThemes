<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Landing_Page
 */

?>



	<article class="feature-box card"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ) { ?>

			<div class="card-img-top">
				<?php cherstyb_post_thumbnail(); ?>
				
			</div>
		
		<?php } ?>
		

		<div class="card-body">

			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h4 class="entry-title card-title feature-box__text">', '</h4>' );
				else :
					the_title( '<h4 class="entry-title card-title feature-box__text"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
				endif;

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
				the_excerpt();
				?>

				<p>
				<a href="<?=get_permalink()?>" class="btn-text">Lise l'article &rarr;</a>
				
				</p>
			</div> <!-- .entry-content -->

		
		</div><!-- .card-body -->

		<footer class="entry-footer">
			
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->

