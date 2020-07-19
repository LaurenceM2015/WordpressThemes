<?php 
	/* Template Name: Mes Tourne */
  get_header('menu2');
?>

    <!-- MASTERHEAD
    ================================================== --> 
    <header class="masthead h-100 parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/tourne-img.jpg">
        <div class="container d-flex align-items-center">
            <div class="mx-auto text-center">
                <h1 class="text-uppercase text-white heading-primary">
                    <span class="heading-primary--main">Mes Tournés</span>
                    <span class="heading-primary--sub">Toute les concert</span>
                </h1>
                <div class="btn-cta">
                    <a href="#section-tourne" type="submit" class="btn btn--primary js-scroll-trigger">Contact Me</a>
                </div>
            </div>
        </div>
    </header>

    <!-- GALLERY SECTION
    ================================================== --> 
    <section id="section-tourne" class="page-section" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="heading-secondary heading-secondary--1 pb-5">Les Dernier Tourne</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="gallery">
                        <div class="gallery__item" href="#!">
                        <span class="caption">
                            <span class="caption-content">
                            <h4>Tourn One</h4>
                            <p class="mb-0">Tourne</p>
                            </span>
                        </span>
                        <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tourne1.jpg" alt="">
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="gallery">
                        <div class="gallery__item" href="#!">
                        <span class="caption">
                            <span class="caption-content">
                            <h4>Tourne One</h4>
                            <p class="mb-0">Tourne two</p>
                            </span>
                        </span>
                        <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tourne2.jpg" alt="">
                        </div>
                    </div>
                </div>
                    
                    
            </div>
        </div><!-- ./container -->
    </section>


    <?php get_template_part('content', 'contactUs'); ?>

<?php

get_footer();
?>