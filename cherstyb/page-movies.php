<?php 
	/* Template Name: Mes Film */
  get_header('menu2');
  
  $api_key = 'AIzaSyARD7JnKIBP0Y88x4yydAVcOGrfz5XpSvg';

  $playlist_id =  'PLPnQarZgTKU3fwFUk07BiUKo-dDN3daR9'; 

  $api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=25&playlistId='. $playlist_id . '&key=' . $api_key;

  $playlist = json_decode(file_get_contents($api_url));

  // Feature Image

  $thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>


  <!-- HEADER
    ================================================== --> 
    <header id="section-movies" class="section-movies">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cherstyvideo1.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
          <div class="d-flex h-100 text-center align-items-center">
              <div class="w-100 text-white">
                
                <h1 class="heading-primary">
                  <span class="heading-primary--main">Film Télévise</span>
                  <span class="heading-primary--sub">Actrice de Télévision</span>
              </h1>
              <div class="btn-cta">
                <a href="#projects" type="submit" class="btn btn--primary js-scroll-trigger">Contact Me</a>
              </div>
              
              </div>
             
          </div>
        </div>
    </header>



<!-- SECTION VIDEO
    ================================================== --> 
    <section id="projects" class="projects-section page-section bg-light">
        <div class="container">

          <div class="row">
            <div class="col-lg-12">
              <h2 class="heading-secondary heading-secondary--1 pb-5">Movies Videos</h2>
            </div>
          </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          
            <div class="col-lg-6 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZcaUG_xGnPs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
            </div>

            <div class="col-lg-6 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/J4hOdbcy5Ok" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aGZ6ohejeoM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        
            <div class="col-lg-6 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Zj8Ci9PZspc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        </div>
            </div>
        </div>
    </section>


  <!-- CONTACT SECTION
  ================================================== -->
  <?php get_template_part('content', 'contactUs'); ?>

<?php get_footer(); ?>




