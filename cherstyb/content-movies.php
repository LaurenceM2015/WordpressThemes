<?php
   // Movies Hero Section 
    /* Fall back image */	
    
    $carousel_movie_title  = get_field('carousel_movie_title');
    $carousel_movie_desc   = get_field('carousel_movie_desc');
    $carousel_emission_img   = get_field('carousel_emission_img');

   
   // Film Video page number 122
   
   $video_trailler  = get_field('video_trailler',(122));
   $youtube_video   = get_field('youtube_video');
   $section_subheading     = get_field('section_subheading',(122));
   $section_subdescription = get_field('section_subdescription',(122));

   
   //$section_button_text = get_field('section_button_text',384); // Cannot Fount the field
   $thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id(122) );

  
   // id="movies"
?>

<!-- MOVIES SECTION
  ================================================== --> 
  <section id="movies" class="section-movies page-section">
    <div class="overlay"></div>
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="<?php echo $video_trailler; ?>" type="video/mp4">
    </video>
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
        <h2 class="heading-secondary text-white">
          <?php  $my_postid = 122;//This is page id or post id
            $content_post = get_post($my_postid);
            $title= $content_post->post_title;
            $content = $content_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
          ?>
          <span class=""><?php echo $title; ?></span>
        </h2>
        <p class="text-white mx-auto">
          <span><?php echo $section_subdescription; ?></span>
        </p>

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
      <div class="row no-gutters mb-lg-0">
      <?php $loop = new WP_Query( array( 'post_type' => 'mes_films', 'posts_per_page'=>4, 'orderby' => 'post_id', 'order' => 'DESC' ) ); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); 
        $youtube_video   = get_field('youtube_video');    
      ?>
        <div class="col-lg-6 embed-responsive embed-responsive-16by9">
          <?php echo $youtube_video; ?>
        </div>
        <?php endwhile; wp_reset_query(); ?>
         
      </div><!-- ./row one -->

         

          <div class="row">
               <div class="col-md-12">
               <div class="btn-cta">
                <!--<a href="movies.html" type="submit" class="btn btn--primary mx-auto">Visite La Page</a> -->
               </div>
               </div>
          </div><!-- ./cta -->

          </div>
     </section>
	

  