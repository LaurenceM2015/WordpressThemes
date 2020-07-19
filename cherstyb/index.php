<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Landing_Page
 */

get_header('menu2');
?>

   <!-- BLOG PAGE HEADER -->
   
   	<header class="">
    	<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                  
                </li>
            	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2">
      
                </li>
            </ol>
        	<div class="carousel-inner" role="listbox">
				<!-- Slide One - Set the background image for this slide in the line below -->
				<div class="carousel-item active" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/africainprondtondestinenmain.jpg')">
					<div class="carousel-caption d-none d-md-block">
						<h3 class="display-4">First Slide</h3>
						<p class="lead">This is a description for the first slide.</p>
					</div>
				</div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
				<div class="carousel-item" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1920x1080')">
					<div class="carousel-caption d-none d-md-block">
						<h3 class="display-4">Second Slide</h3>
						<p class="lead">This is a description for the second slide.</p>
					</div>
				</div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
				<div class="carousel-item" style="background-image: url('https://source.unsplash.com/O7fzqFEfLlo/1920x1080')">
					<div class="carousel-caption d-none d-md-block">
						<h3 class="display-4">Third Slide</h3>
						<p class="lead">This is a description for the third slide.</p>
					</div>
				</div>
        	</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
        </div>
	</header>

	<main class="page-section blog-section">
		<section>
			<div class="container my-5">
				<div class="row">
                    <div class="col-lg-12">
                        <h2 class="heading-secondary heading-secondary--1 pb-5">Actualités</h2>
                    </div>
                </div>
				<div class="card-columns my-5">
						
						<?php
							if ( have_posts() ) :
							
								//if ( is_home() && ! is_front_page() ) :
									?>
									<!--<header><h1 class="page-title screen-reader-text"></h1></header> -->
									<?php
								//endif;
							
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
							
								
							
							else :
							
								get_template_part( 'template-parts/content', 'none' );
							
							endif;
						?>
              
					</div> <!-- col-md -->

					<!--<aside class="col-md-3">
					<?php //get_sidebar(); ?>
					</aside> -->
				
				
				<?php the_posts_navigation(); ?>
			</div><!-- container -->
		</section>
	</main>

	

<?php

get_footer();
