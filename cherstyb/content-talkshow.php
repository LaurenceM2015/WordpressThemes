<?php 
    // Feature Image
    $thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id(103) );

    // Talk show Hero Section
    $talk_show_heading       = get_field('talk_show_heading');
    $talk_show_description   = get_field('talk_show_description');
    $talk_show_hero_image    = get_field('talk_show_hero_image');
    
    // Section Talk Show Subheading, not found on any page field.
    $section_talk_show_subheading   = get_field('section_talk_show_subheading');
    $section_talk_show_body         = get_field('section_talk_show_body');
    
    // Global Home page Section
    $section_emission_page_link   = get_field('section_emission_page_link');
    $page_section_button_text    = get_field('page_section_button_text');
    
     // Display Mes Emission Playlist From Youtbe
    // Display Mes Emission Playlist From Youtbe
    $api_key = 'AIzaSyARD7JnKIBP0Y88x4yydAVcOGrfz5XpSvg';

    $playlist_id =  'PLPnQarZgTKU19coIoTnw131Qo1fix0I_Z'; 

    $api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=25&playlistId='. $playlist_id . '&key=' . $api_key;

    $playlist = json_decode(file_get_contents($api_url));
     
?>

 <!-- Section Talk show bg image -->
<!-- FEATURE IMAGE
	================================================== -->
  <?php if( has_post_thumbnail() ) { // check for feature image ?>
  
    <section id="talkshow" class="section-stage page-section h-100 parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php echo $thumbnail_url; ?>">
      <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
          <div class="col-lg-10 align-self-end">
          
          <?php  $my_postid = 103;//This is page id or post id
            $content_post = get_post($my_postid);
            $title= $content_post->post_title;
            $content = $content_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
          ?>
          <h2 class="heading-secondary heading-secondary--1 text-white">
            <span class="heading-primary--main"><?php echo $title; ?></span>
          </h2>
          
          </div>
          <div class="col-lg-8 align-self-baseline">
            <p class="text-white-75 font-weight-light mb-5">
            <?php echo $content; ?>
            </p>

            <div class="text-center pt-5">
              <div class="btn-cta">
                <a href="#emission-video" type="submit" class="btn btn--primary js-scroll-trigger">En Savoir Plus</a>
              </div>
            </div>

          </div>
        </div>
      <div>
    </section>

  <?php } else { // fallback image ?>
    
      <section id="talkshow" class="parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/WhatsApp-Image.jpg">

        <div class="container h-100">
          <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
            <h1 class="text-uppercase text-white heading-primary">
            <?php  $my_postid = 103;//This is page id or post id
              $content_post = get_post($my_postid);
              $title= $content_post->post_title;
              $content = $content_post->post_content;
              $content = apply_filters('the_content', $content);
              $content = str_replace(']]>', ']]&gt;', $content);
            ?>
              <span class="heading-primary--main"><?php echo $title; ?></span>
              
              
            </h1>
            <hr class="divider my-4">
            </div>
            <div class="col-lg-8 align-self-baseline">
              <p class="text-white-75 font-weight-light mb-5">
                <?php $content; ?>
              </p>
              

              <div class="text-center pt-5">
                <div class="btn-cta">
                  <a href="#emission-video" type="submit" class="btn btn--primary js-scroll-trigger">En Savoir Plus</a>
                </div>
              </div>
            
            </div>
          </div>
        <div>
      </section>
    
  <?php } ?>
 

 <!-- EMISSION VIDEOS -->
 <section id="emisson-videos" class="projects-section page-section">
    <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <h2 class="heading-secondary heading-secondary--1 pb-5">Emissions Videos</h2>
      </div>
    </div>
      <!-- Project One Row -->
      <div class="row no-gutters mb-lg-0">
          
      <?php foreach($playlist->items AS $item): ?>
        <div class="col-lg-6">
          <?php //echo $item->snippet->thumbnails->default->url; ?>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe src="https://www.youtube.com/embed/<?php echo $item->snippet->resourceId->videoId; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
        </div>
        <?php endforeach; ?>
      </div>
      
    </div><!-- ./container -->
  </section>