<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Landing_Page
 */

get_header('menu2');
?>

<header class="page-header header-blog parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/search-hero.jpg">
	

	<div class="container h-100">
		<div class="row h-100 align-items-center justify-content-center text-center">
		  <div class="col-lg-10"><!-- align-self-end -->
			<h1 class="text-uppercase text-white heading-primary">
				<span class="heading-primary--main">
				<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );

					?>
				</span>
			</h1>
			
		  </div>
		  
		</div>
	<div>

</header><!-- .page-header -->

	<main class="container">
		<div class="row d-flex" >
		<div class="col-md-8">
		<?php if ( have_posts() ) : ?>

		

<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();

	/*
	* Include the Post-Type-specific template for the content.
	* If you want to override this in a child theme, then include a file
	* called content-___.php (where ___ is the Post Type name) and that will be used instead.
	*/
	get_template_part( 'template-parts/content', get_post_type() );
	

endwhile;

	the_posts_navigation();

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>
		</div>

		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
		
		</div><!-- .row -->
	
	</main>


<?php

get_footer();
