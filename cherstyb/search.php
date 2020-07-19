<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bootstrap_Landing_Page
 */

get_header('menu2');
?>

	
	<header class="header-blog parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/search-hero.jpg">
		<div class="container h-100">
			<div class="row h-100 align-items-center justify-content-center text-center">
				<div class="col-lg-10"><!-- align-self-end -->
					<h1 class="text-uppercase text-white heading-primary">
						<span class="heading-primary--main page-title">
							<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'cherstyb' ), '<span>' . get_search_query() . '</span>' );
							?>
						</span>
					</h1>
				</div>
			</div>
		<div>
	</header><!-- .page-header -->

	<main id="primary" class="content-area">
		<section id="main" class="site-main container page-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<?php if ( have_posts() ) : ?>
						<?php /* Start the Loop */
							while ( have_posts() ) :
									the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

								endwhile;

								the_posts_navigation();

								else :
									get_template_part( 'template-parts/content', 'none' );
							endif;
						?>
					</div>

					<aside class="col-sm-4">
						<?php get_sidebar(); ?>
					</aside>

				</div><!-- ./row -->
			</div><!-- ./container -->
		</section><!-- #main -->
			
		
	</main><!-- #primary -->

<?php

get_footer();
