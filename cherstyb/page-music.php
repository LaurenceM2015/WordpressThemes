<?php 
	/* Template Name: Music Page */

    get_header('menu2');
    
    $api_key = 'AIzaSyARD7JnKIBP0Y88x4yydAVcOGrfz5XpSvg';

    $playlist_id =  'PLPnQarZgTKU3fwFUk07BiUKo-dDN3daR9'; 

    $api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=25&playlistId='. $playlist_id . '&key=' . $api_key;

    $playlist = json_decode(file_get_contents($api_url));


    // App Store Link
  $google_play_music_store_link = get_field('google_play_music_store_link');
  $imusica_music_store_link      = get_field('imusica_music_store_link');
  $spotify_music_store_link      = get_field('spotify_music_store_link');
  $amazon_music_store_link      = get_field('amazon_music_store_link');
  $deezer_music_store_link      = get_field('deezer_music_store_link',483);
  $apple_music_store_link       = get_field('apple_music_store_link',483);

  $google_play_music_logo  = get_field('google_play_music_logo',483);
  $imusica_music_logo      = get_field('imusica_music_logo',483);
  $spotify_music_logo      = get_field('spotify_music_logo',483);
  $amazon_music_logo       = get_field('amazon_music_logo',483);
  $deezer_music_logo       = get_field('deezer_music_logo',483);
  $apple_music_logo        = get_field('apple_music_logo',483);

    
    // Team Member Section 
    $section_lien       = get_field('section_lien');
    $section_url	      = get_field('section_lien');

    $carousel_music_link   = get_field('carousel_music_link',11);

    $thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

    
    
   
?>


 <!-- MUSIC SECTION
    ================================================== -->  
    <section class="music-section">
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
  
        <?php $loop = new WP_Query( array( 'post_type' => 'post',  'cat'=>12, 'posts_per_page'=>2, 'orderby' => 'post_id', 'order' => 'DESC' ) ); ?>
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

      
      
    </div>
  </div>
</section><!-- Album -->


 <!-- MUSIC ALBUM
    ================================================== --> 
    <section id="music-album" class="page-section">
      <div class="container">
          
        <div class="row">
          <div class="col-lg-12">
              <h2 class="heading-secondary heading-secondary--1 pb-5">Music Album</h2>
          </div>
          <div class="card-deck">
            <div class="card feature-box">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cbMoreOfYou.jpg" class="card-img-top img-fluid h-100" alt="...">
            </div>
            <div class="card feature-box">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/yourriegn.jpg" class="card-img-top img-fluid h-100" alt="...">
              
            </div>
            <div class="card feature-box">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cd-cover-3.jpg" class="card-img-top img-fluid h-100" alt="...">
            </div>
          </div><!-- .card-deck -->

               
        </div><!-- ./row -->
         
      </div><!-- ./container -->
    </section>


 <!-- MASTER HEADER
    ================================================== --> 
  <section id="masthead " class="">
    <div class="overlay"></div>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" src="https://www.youtube.com/embed/eumpRE-sTY4?autoplay=1&amp;controls=0&amp;disablekb=1&amp;fs=0&amp;iv_load_policy=3&amp;loop=1&amp;modestbranding=1&amp;playsinline=1&amp;rel=0&amp;mute=1&amp;showinfo=0"></iframe>    </div>
      </div>
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Ma Music</span>
                <span class="heading-primary--sub">is where life happens</span>
            </h1>
              <!--<p class="lead mb-0 text-capitalize">Actrice, Chanteuse, Animatrice de Télévision, et étudiant.</p> -->
            <div class="btn-cta">
                <a href="#section-music" type="submit" class="btn btn--primary js-scroll-trigger">Contact Me</a>
            </div>
          </div>
        </div>
    </div>
  </section>


<!-- 
   MUSIC VIDEO SECTION 
=================================-->
<section class="page-section" id="music-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="heading-secondary heading-secondary--1 pb-5">Emissions Videos</h2>
        </div>
      </div>
    <div class="row justify-content-center no-gutters mb-lg-0">
        <!-- Team Member 1 -->
        <?php foreach($playlist->items AS $item): ?>
        <div class="col-lg-6">
        
        <?php //echo $item->snippet->thumbnails->default->url; ?>
            <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.youtube.com/embed/<?php echo $item->snippet->resourceId->videoId; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
           
        </div>
        <?php endforeach; ?>
    </div>
   
    </div>

</section>



<!-- CONTACT SECTION
     ================================================== -->
     <?php get_template_part('content', 'contactUs'); ?>


<?php 
 get_footer();
?>

