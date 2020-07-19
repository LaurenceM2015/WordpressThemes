<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_Landing_Page
 */

get_header('menu2');
?>
<?php if ( has_post_thumbnail() ) { ?>
<header class="header-blog parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url(); ?>">
<!-- <header class="section-primary text-white page-section"> -->
	<div class="container h-100">	
		<div class="row h-100 align-items-center justify-content-center text-center">
			<div class="col-lg-10"><!-- align-self-end -->
					<h1 class="text-uppercase text-white heading-primary">
						<span class="heading-primary--main page-title">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</span>
					</h1>
				</div>
			</div>
		<div>
</header>

<?php } ?>

<main id="primary" class="content-area section-features page-section">
	<section id="main" class="site-main container">
		<div class="row">
			<!-- BLOG CONTENT 
			================================================== -->
			<div class="col-md-8">
			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'copy' );

					//the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>

					
			</div><!-- .col-md-8 -->

 			<!-- SIDEBAR
			================================================== -->
			<aside class="col-md-4">
				<?php get_sidebar(); ?>
			</aside>

			</div> <!-- .row -->
			
		</section><!-- #main -->

	</main><!-- #primary -->

	<footer class="entry-footer">
		<?php  the_post_navigation(); ?>
	</footer><!-- .entry-footer -->

<?php

get_footer();
