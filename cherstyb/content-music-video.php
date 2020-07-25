<?php

  // Feature Image
  $thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id(64) );
  // Section Album
  $section_subheading     = get_field('section_subheading',(64));
  $section_subdescription = get_field('section_subdescription',(64));
  
  $song_list   = get_field('music_album_song_list');
  $store_link   = get_field('store_link');
  
  //print_r($store_link);

  
  
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
          <span class=""><?php echo $section_subheading; ?></span>
          </h2>
          <p class="text-black-50 mx-auto mb-5">
          <span><?php echo $section_subdescription; ?></span>
         
          </p>
        </div>
      </div> <!-- project Row -->
    
      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters section-music__container">
  
        <?php $loop = new WP_Query( array( 'post_type' => 'my_music', 'posts_per_page'=>2, 'orderby' => 'post_id', 'order' => 'DESC' ) ); ?>
          <?php while( $loop->have_posts() ) : $loop->the_post(); 
          $song_list   = get_field('song_list');
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
                <p class="mb-0"><?php echo $song_list; ?></p>
              </div>
            </div>
          </div>
        </div><!-- ./album List -->

        <?php endwhile; wp_reset_query(); ?>
      </div> <!-- ./ row one -->
      
      

    </div> <!-- container -->

    <!-- Section Lien -->
    <div class="container mt-5 pt-5">
      <div class="row justify-content-center align-items-center">
        
      <?php $loop = new WP_Query( array( 'post_type' => 'stores_link', 'orderby' => 'post_id', 'order' => 'DESC' ) ); ?>
          <?php while( $loop->have_posts() ) : $loop->the_post(); 
          $store_link   = get_field('store_link');
          ?>

        <div class="col-md-2 col-sm-4 col-xs-6  lead wow fadeIn">
          <a href="<?php echo $store_link; ?>" target="_blank">
            <img class="img-fluid d-block mx-auto" src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url(); }?>" alt="">
          </a>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div><!-- ./row -->

      
      <div class="text-center pt-5 col-lg-12">
      <?php // echo $section_music_page_link_text; ?>
     <!-- <a role="button" href="#" class="btn btn--primary mx-auto btn--animated">En Savoir Plus &rarr;</a> -->
      </div>
    </div><!-- ./container -->
  </div>
</section><!-- Album -->
