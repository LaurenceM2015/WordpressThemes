<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap_Landing_Page
 */

get_header('menu2');
?>

<!-- Page Header -->

<header class="masthead h-100 parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/search-hero.jpg">
    <div class="container d-flex align-items-center">
        <div class="mx-auto text-center">
            <h1 class="text-uppercase text-white heading-primary">
                <span class="heading-primary--main">404</span>
            </h1>
			<h3 class="text-white">Dirigez-vous vers la <a href="/">page d’accueil</a> ou consulte les dernier article si desus.</h3>
            <div class="btn-cta">
                <a href="#erro-404" type="submit" class="btn btn--primary js-scroll-trigger">Nos Article</a>
            </div>
        </div>
    </div>
</header>




<section id="erro-404" class="container page-section">
	<div id="primary" class="row">
		<main id="content" class="col-sm-8">
			<div class="erro-404 not-found">
				<div class="page-content mt-0">
				
				<!-- Mes Emission -->
				<div class="row no-gutters">
					<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=>4,'orderby' => 'post_id', 'order' => 'DSC' ) ); ?>
							
					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
      
					<div class="col-lg-6">
						<div class="gallery mb-0">
						<div class="gallery__item" href="#">
							<span class="caption">
							<span class="caption-content">
								<h4><?php the_title(); ?></h4>
								<p class="mb-0"><?php //the_content(); ?></p>
							</span>
							</span>
							<img class="img-fluid" src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url(); }?>">
						</div>
						</div>
					</div><!-- ./ col -->

					<?php endwhile; wp_reset_query(); ?>
				</div>

				</div><!-- ./page-content -->
			</div><!-- ./erro-404 -->
		</main><!-- .content -->

		<!-- SIDEBAR
			================================================== -->
		<aside class="col-sm-4">
			<?php get_sidebar(); ?>
		</aside>
	</div><!-- ./row primary -->
</section><!-- ./container -->

 <!-- CONTACT SECTION
  ================================================== -->
  <?php get_template_part('content', 'contactUs'); ?>

	

<?php
get_footer();
