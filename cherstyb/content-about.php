 <?php

  // ABOUT THE CHERSTY B
  $about_us_heading         = get_field('about_us_heading');
  $about_us_subheading      = get_field('about_us_subheading');
  $about_us_description     = get_field('about_us_description');
  $about_us_image           = get_field('about_us_image');

  // Home Page Section
  $page_section_button_text = get_field('page_section_button_text');
  $section_about_page_link  = get_field('section_about_page_link');
  
  //$visite_la_page      = get_field('visite_la_page'); // can't found the field
  
  // About Page Feature Image
  $thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id(104) );

?>
 
 <!-- apropo de nous -->
<!-- FEATURE IMAGE
	================================================== -->
<?php if( has_post_thumbnail() ) { // check for feature image ?>
  <section class="header-blog section-stage page-section h-100 parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php echo $thumbnail_url; ?>">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white heading-primary">
            <h2 class="text-white heading-secondary heading-secondary--1">
            <?php  $my_postid = 104;//This is page id or post id
              $content_post = get_post($my_postid);
              $title= $content_post->post_title;
              $content = $content_post->post_content;
              $content = apply_filters('the_content', $content);
              $content = str_replace(']]>', ']]&gt;', $content);
            ?>
            <?php echo $title; ?>
            </h2>
          </h1>
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">
            <?php echo $content; ?>
          </p>
        </div>
      </div><!-- ./row -->
      <div class="text-center pt-5">
          <div class="btn-cta">
            <a href="#" type="submit" class="btn btn--primary js-scroll-trigger">En Savoir Plus</a>
          </div>
      </div>
    <div><!-- ./container -->
  </section>

<?php } else { // fallback image ?>

  <section class="header-blog section-stage page-section h-100 parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/ch-heads3.png">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white heading-primary">
            <h2 class="text-white heading-secondary heading-secondary--1">
              A PROPO DE MOIS
            </h2>
          </h1>
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">
            Tout ce qui a savoir sure moi
          </p>
        </div>

      </div><!-- ./row -->
        <div class="text-center pt-5">
          <div class="btn-cta">
            <a href="#" type="submit" class="btn btn--primary js-scroll-trigger">En Savoir Plus</a>
          </div>
        </div>
    <div><!-- ./container -->
  </section>

<?php } ?>

<!-- ABOUT PROFILE 
    ================================================== --> 
    <section id="section-profil" class="projects-section page-section pb-0">
        <div class="container">
          <div class="row align-items-center no-gutters">
            <div class="col-xl-5 col-lg-5">
                <div class="text-center wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                  <!-- If user uploaded image -->
                  <img class="img-fluid" src="http://localhost:8888/wordpress/wp-content/uploads/2020/05/cbAbout.png" alt="">
                
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
              <div class="wow fadeInRight">
                <div class="project-text project-text--b-left">
                  <h3>Chersty<!-- Qui Est Chersty B Bitsindou--></h3>
                  <p class="">Je suis née au Congo Brazzaville d’une mère Congolaise et d’un père Cubain. J’ai grandi dans une famille chrétienne. Comme un enfant qui apprend à marcher, j’ai fait mes premiers pas dans la famille chrétienne avec ma grand-mère qui était une femme passionnée du Seigneur et son œuvre.</p>
                
                  <div class="btn-cta">
                    <!--<a role="button" href="" target="_blank" class="btn-text">Visite La Page →</a> -->
                  </div>
                </div>

              </div><!-- ./wow fadeInRight -->
            </div><!-- ./desc -->
          
          </div><!-- ./row -->
            
        </div><!-- ./container -->
    </section><!-- a propos de nous -->