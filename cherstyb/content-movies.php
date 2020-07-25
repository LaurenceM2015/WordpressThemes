<?php
   // Movies Hero Section 
    /* Fall back image */	
    
    $carousel_movie_title  = get_field('carousel_movie_title');
    $carousel_movie_desc   = get_field('carousel_movie_desc');
    $carousel_emission_img   = get_field('carousel_emission_img');

   
   // Film Video page number 384
   $section_movie_subheading         = get_field('section_movie_subheading',384);
   $section_movies_body            = get_field('section_movies_body',384);
   $section_blog__video   = get_field('section_blog__video');
  

   $section_movies_page_link = get_field('section_movies_page_link');
   $page_section_button_text = get_field('page_section_button_text');
   //$section_button_text = get_field('section_button_text',384); // Cannot Fount the field
   $thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id(384) );

  
   // id="movies"
?>

<!-- MOVIES SECTION
  ================================================== --> 
  <section id="movies" class="section-movies page-section">
      <div class="overlay"></div>
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cherstyvideo1.mp4" type="video/mp4">
      </video>
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white">
            <h1 class="display-3">Film Télévise</h1>
            <p class="lead mb-0">Actrice de Télévision</p>

            <div class="btn-cta">
              <a href="#film-videos" type="submit" class="btn btn--primary js-scroll-trigger">En Savoir Plus</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MOVIE VIDEOS -->
     <section id="film-videos" class="projects-section page-section">
        <div class="container">
          <!-- Project One Row -->
            <div class="row justify-content-center no-gutters mb-lg-0">
              <div class="col-lg-6 embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZcaUG_xGnPs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
              </div>
               
              <div class="col-lg-6 embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/J4hOdbcy5Ok" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div><!-- ./row one -->

          <!-- Project Two Row -->
          <div class="row justify-content-center no-gutters">
              <div class="col-lg-6 embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aGZ6ohejeoM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          
              <div class="col-lg-6 embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Zj8Ci9PZspc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
              </div>
          </div><!-- ./row two -->

          <div class="row">
               <div class="col-md-12">
               <div class="btn-cta">
                <!--<a href="movies.html" type="submit" class="btn btn--primary mx-auto">Visite La Page</a> -->
               </div>
               </div>
          </div><!-- ./cta -->

          </div>
     </section>
	

  