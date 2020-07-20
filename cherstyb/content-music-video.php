<?php

  // Feature Image
  $thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id(483) );
  // Section Album
  $music_album_song_list   = get_field('music_album_song_list');
  $section_single_image  = get_field('section_single_image');
  $section_album_and_music_video_heading = get_field('$section_album_and_music_video_heading');
  //print_r($section_talk_show_subheading);
  print_r($amazon_music_logo);

  // App Store Link
  $google_play_music_store_link = get_field('google_play_music_store_link');
  $imusica_music_store_link      = get_field('imusica_music_store_link');
  $spotify_music_store_link      = get_field('spotify_music_store_link');
  $amazon_music_store_link      = get_field('amazon_music_store_link');
  $deezer_music_store_link      = get_field('deezer_music_store_link');
  $apple_music_store_link       = get_field('apple_music_store_link');

  $google_play_music_logo  = get_field('google_play_music_logo');
  $imusica_music_logo      = get_field('imusica_music_logo');
  $spotify_music_logo      = get_field('spotify_music_logo');
  $amazon_music_logo       = get_field('amazon_music_logo');
  $deezer_music_logo       = get_field('deezer_music_logo');
  $apple_music_logo        = get_field('apple_music_logo');
  
  
  $section_music_page_link     = get_field('section_music_page_link');
  $page_section_button_text    = get_field('page_section_button_text');
  //$section_music_page_link_text = get_field('section_music_page_link_text'); // Can't found the field

?>

<!-- Hero Section -->

 <!-- MUSIC SECTION
    ================================================== -->  
  <section id="section-music" class="music-section">
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
          <div class="carousel-item active" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/cbMoreOfYou.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="display-4">First Slide</h3>
              <p class="lead">This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/storebanner.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="display-4">Second Slide</h3>
              <p class="lead">This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/yourReign.jpg')">
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
  </section>


 <!-- Muisc Album Section id="section-music" -->
 
 <section class="page-section projects-section bg-light" id="album">
  <div class="wow fadeIn">
    <div class="container">
      <!-- Featured Project Row Headings -->
      <div class="row">
        <div class="col-lg-12 align-self-end text-center mb-5">
          <h2 class="heading-secondary heading-secondary--1">
          <span class="">Le Plus Beau Cadeau</span>
          </h2>
          <p class="text-black-50 mx-auto mb-5">
          <span>Musique Religieuse - 2017</span>
          <span>24 minutes 5 &nbsp; morceaux</span>
          </p>
        </div>
      </div> <!-- project Row -->
    
      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters section-music__container">
  
        <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=>2, 'orderby' => 'post_id', 'order' => 'DESC' ) ); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); 
         $music_album_song_list   = get_field('music_album_song_list');

        ?>
        <div class="col-lg-6">
          <div class="wow fadeInRight section-music__box">
            <img class="img-fluid section-music__img" src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url(); }?>" alt="">
          </div>
        </div><!-- album image -->
          
        <div class="col-lg-6">
        <div class="text-center project section-music__box wow fadeInLeft">
          
            <div class="d-flex section-music__text">
              <div class="project-text w-100">
              <?php //the_title(); ?>
                <!--<h4 class="page-header mt-0"></h4> -->
                <p class="mb-0">
                  <?php echo $music_album_song_list; ?>
                  
                </p>
                
              </div>
            </div>
          </div>
        </div><!-- ./album List -->

        <?php endwhile; wp_reset_query(); ?>
      </div> <!-- ./ row one -->
      
      

    </div> <!-- container -->

    <!-- Section Lien -->
    <div class="container mt-5">
      <div class="row justify-content-center align-items-center">
        <!-- Apple Music Store -->
        <div class="col-md-2 col-sm-4 col-xs-6  lead wow fadeIn">
          <a href="<?php echo $apple_music_store_link; ?>" target="_blank">
          <?php if( !empty($apple_music_logo) ) : ?>  
            <img class="img-fluid d-block mx-auto" src="<?php echo $apple_music_logo['url']; ?>" alt="<?php echo $apple_music_logo['alt']; ?>">
          <?php endif; ?>
          </a>
        </div>
        <!-- Amazon Music Store -->
        <div class="col-md-2 col-sm-4 col-xs-6  lead wow fadeIn">
          <a href="<?php echo $amazon_music_store_link; ?>" target="_blank">
          <?php if( !empty($amazon_music_logo) ) : ?>  
            <img class="img-fluid d-block mx-auto" src="<?php echo $amazon_music_logo['url']; ?>" alt="<?php echo $amazon_music_logo['alt']; ?>">
          <?php endif; ?>
          </a>
        </div>
        <!-- Google Play Music Store -->
        <div class="col-md-2 col-sm-4 col-xs-6  lead wow fadeIn">
          <a href="<?php echo $google_play_music_store_link; ?>" target="_blank">
          <?php if( !empty($google_play_music_logo) ) : ?>  
            <img class="img-fluid d-block mx-auto" src="<?php echo $google_play_music_logo['url']; ?>" alt="<?php echo $google_play_music_logo['alt']; ?>">
          <?php endif; ?>
          </a>
        </div>
        <!-- Spotify Music Store -->
        <div class="col-md-2 col-sm-4 col-xs-6  lead wow fadeIn">
          <a href="<?php echo $spotify_music_store_link; ?>" target="_blank">
          <?php if( !empty($spotify_music_logo) ) : ?>  
            <img class="img-fluid d-block mx-auto" src="<?php echo $spotify_music_logo['url']; ?>" alt="<?php echo $spotify_music_logo['alt']; ?>">
          <?php endif; ?>
          </a>
        </div>
      </div>

      
      <div class="text-center pt-5 col-lg-12">
      <?php // echo $section_music_page_link_text; ?>
     <!-- <a role="button" href="#" class="btn btn--primary mx-auto btn--animated">En Savoir Plus &rarr;</a> -->
      </div>
    </div>
  </div>
</section><!-- Album -->
