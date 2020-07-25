<?php 
    /* Template Name: About Me */
    get_header('menu2');
    $thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

    // ABOUT THE CHERSTY B
    $about_us_heading      = get_field('about_us_heading');
    $about_us_image        = get_field('about_us_image');
    $about_us_hero_image   = get_field('about_us_hero_image');
    $about_us_subheading   = get_field('about_us_subheading');
    $about_us_description  = get_field('about_us_description');


?>

<!-- FEATURE IMAGE
	================================================== -->
<?php if( has_post_thumbnail() ) { // check for feature image ?>
  
  <header class="header-blog section-stage page-section h-100 parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php echo $thumbnail_url; ?>">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
            <h1 class="text-uppercase text-white heading-primary">
            <span class="heading-primary--main"><?php the_title(); ?></span>
            </h1>
        </div>
      </div>
    
      <div class="row align-items-center justify-content-center">
	      <div class="col-md-12">
          <div class="wow fadeInRight featured-text text-center">
            <p class="text-white-75 font-weight-light mb-5">
              <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; // end of the loop ?>
            </p>
          </div>

          <div class="text-center pt-5">
            <a class="js-scroll-trigger text-white js-scroll-trigger" href="#music-section"><i class="fas fa-arrow-circle-down text-white" style="font-size:5rem;"></i></a>
          </div>
	      </div>
      </div>
    <div><!-- ./container -->
  </header>

<?php } else { // fallback image ?>

  <header class="section-stage page-section h-100 parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/ch-heads3.jpg">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
            <h1 class="text-uppercase text-white heading-primary">
            <span class="heading-primary--main">A Propo De Mois</span>
            </h1>
        </div>
      </div><!-- ./row -->
            
      <div class="row align-items-center justify-content-center">
		      <div class="col-lg-12">
            <div class="wow fadeInRight featured-text">
              <h3>Chanteuse</h3>
              <p class="text-white-75 font-weight-light mb-5">
                j’ai commencé à chanter très jeune, et depuis je n’ai jamais arrêté.
                Dans le milieu musical, ma grand-mère étais ma première inspiration, et en grandissant, Whitney Houston et Maria Carey ont été les artistes qui m’ont inspirées et influencées par leurs originalités et potentiels.
              </p>
            </div>

            <div class="text-center pt-5">
              <a class="js-scroll-trigger text-white js-scroll-trigger" href="#music-section"><i class="fas fa-arrow-circle-down text-white" style="font-size:5rem;"></i></a>
            </div>
		      </div>
		  </div><!-- ./row -->
    <div><!-- ./container -->
  </header>

<?php } ?>

<section id="apropodenous" class="parallax-window projects-section page-section overlay pb-0" data-z-index="0" data-parallax="scroll" data-image-src="assets/css/img/tourne-hero.jpg">
  <div class="container">
    <div class="row align-items-center no-gutters">
      <div class="col-xl-5 col-lg-7">
          <div class="wow fadeInLeft project-img" style="visibility: visible; animation-name: fadeInLeft;">
              <!-- If user uploaded image -->
            <img class="img-fluid" src="http://localhost:8888/wordpress/wp-content/uploads/2020/05/cbAbout.png" alt="">
          
          </div>
      </div>
      <div class="col-xl-7 col-lg-5 wow fadeInRight">
        <div class="project-text project-text--b-left">
          <h3 class="heading">Qui Est Chersty B Bitsindou</h3>
          <p class="">Je suis née au Congo Brazzaville d’une mère Congolaise et d’un père Cubain. J’ai grandi dans une famille chrétienne. Comme un enfant qui apprend à marcher, j’ai fait mes premiers pas dans la famille chrétienne avec ma grand-mère qui était une femme passionnée du Seigneur et son œuvre. Activement engagée dans la chorale son église, elle m’a communique cette passion pour le Gospel, et c’est ainsi que j’ai commencé à chanter à l’âge de 4 ans. J’ai quitté le Congo à l’âge de 14 ans pour rejoindre ma mère en Allemagne ou j’y suis restée pendant quatre ans.</p>
        </div>
      </div><!-- ./desc -->
    </div><!-- ./row -->
                
  </div><!-- ./container -->
</section><!-- a propos de nous -->

<!-- 
  MUSIC SESCTION 
===============================-->
<section id="music-section" class="parallax-window projects-section page-section" data-z-index="0" data-parallax="scroll" data-image-src="http://localhost:8888/wordpress/wp-content/themes/cherstyb/assets/css/img/slide2.jpg">
    <div class="container">
      <div class="row">
          <div class="col-md-12 pb-5">
              <h2 class="mb-5 heading-secondary heading-secondary--1">Musician Artist</h2>
          </div>
      </div>

      <div class="row align-items-center justify-content-center">
        <div class="col-lg-7">
          <div class="wow fadeInLeft project-text project-text--b-right">
            <h3>Chanteuse</h3>
            <p class="font-weight-light mb-5">
              j’ai commencé à chanter très jeune, et depuis je n’ai jamais arrêté.
              Dans le milieu musical, ma grand-mère étais ma première inspiration, et en grandissant, Whitney Houston et Maria Carey ont été les artistes qui m’ont inspirées et influencées par leurs originalités et potentiels.
            </p>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="wow fadeInLeft" style="visibility: visible; animation-name: fadeInRight;">
            <img class="img-fluid rounded-circle mb-3" src="http://localhost:8888/wordpress/wp-content/themes/cherstyb/assets/css/img/plusBcadeau.jpg" alt="Le Plus Beaux Cadeau">
          </div>
        </div>
                   
      </div><!-- ./row -->
                
    <div><!-- ./container -->
</section>

<!-- 
  TALKSHOW 
==========================-->
<section id="talkshow-section" class="parallax-window projects-section page-section overlay" data-z-index="0" data-parallax="scroll" data-image-src="http://localhost:8888/wordpress/wp-content/themes/cherstyb/assets/css/img/talkshow.jpg">
  <div class="container">
    <div class="row">
        <div class="col-md-12 pb-5">
            <h2 class="mb-5 heading-secondary heading-secondary--1">Animatrice de télévision</h2>
        </div>
    </div>

    <div class="row align-items-center justify-content-center">
      <div class="col-lg-5">
          <div class="wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
              <img class="img-fluid rounded-circle mb-3" src="http://localhost:8888/wordpress/wp-content/themes/cherstyb/assets/img/talksShow.jpg" alt="Le Plus Beaux Cadeau">
          </div>
      </div>


      <div class="col-lg-7">
          <div class="wow fadeInRight project-text project-text--b-left">
              <p class="font-weight-light mb-5">
                La télévision c’est un talent qui sommeillait en moi et qui a été réveillé au travers de l’émission « le chemin des artistes « avec le soutient l’honorable SK qui mon mentor.
              </p>
          </div>
      </div>

     
            
    </div>
  <div><!-- ./container -->
</section>

<!-- 
  MOVIES SECTION
=============================-->
<section id="movies-section" class="parallax-window projects-section page-section overlay" data-z-index="0" data-parallax="scroll" data-image-src="http://localhost:8888/wordpress/wp-content/themes/cherstyb/assets/css/img/Moviehero.jpg">
        
  <div class="container">
    <div class="row">
        <div class="col-md-12 pb-5">
            <h2 class="mb-5 heading-secondary heading-secondary--1">Film Télévision</h2>
        </div>
    </div>

    <div class="row align-items-center justify-content-center">
      
      <div class="col-lg-7">
          <div class="wow fadeInLeft project-text project-text--b-right">
              <h3>Actrice</h3>
              <p class="font-weight-light mb-5">
              Mon parcours en tant qu’actrice n’était pas intentionnel au premier abord c’est par hasard que au travers des connaissances que je me suis retrouvée dans ce milieu. 
              J’ai joué dans les <chrétiens Charnelles, Immigrées> et actuellement je travaille sur d’autres films
              </p>
          </div>
      </div>

      <div class="col-lg-5">
          <div class="text-center wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
              <img class="img-fluid rounded-circle mb-3" src="http://localhost:8888/wordpress/wp-content/themes/cherstyb/assets/img/filmprofil.jpg" alt="Film Profil Image">
          </div>
      </div>
            
    </div>
  <div><!-- ./container -->

</section>

<!-- 
  LIVE WORKSHIP
=================================-->
<section id="liveworkship" class="parallax-window projects-section page-section" data-z-index="0" data-parallax="scroll" data-image-src="http://localhost:8888/wordpress/wp-content/themes/cherstyb/assets/css/img/Tourne-hero.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 pb-5">
          <h2 class="mb-5 heading-secondary heading-secondary--1">Live Worship</h2>
      </div>
    </div>

    <div class="row align-items-center justify-content-center">
      <div class="col-lg-5">
          <div class="text-center wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
              <img class="img-fluid rounded-circle mb-3" src="http://localhost:8888/wordpress/wp-content/themes/cherstyb/assets/img/worship1.jpg" alt="Le Plus Beaux Cadeau">
          </div>
      </div>

      <div class="col-lg-7">
          <div class="wow fadeInRight project-text project-text--b-left">
              <p class="font-weight-light mb-5">
              La télévision c’est un talent qui sommeillait en moi et qui a été réveillé au travers de l’émission « le chemin des artistes « avec le soutient l’honorable SK qui mon mentor.
              </p>
          </div>
      </div>

      
                
    </div>
  <div><!-- ./container -->

</section>


<?php get_template_part('content', 'contactUs'); ?>




<?php get_footer(); ?>



