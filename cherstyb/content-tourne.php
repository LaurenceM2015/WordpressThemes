    <?php
     
      // About Page Feature Image
      $thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id(84) );

      $section_subheading     = get_field('section_subheading',(84));
      $section_subdescription = get_field('section_subdescription',(84));
    ?>
    
    <!-- TOURNE SECTION
    ================================================== --> 
    
    <!-- CHECKING IF FEATURE IMAGE EXISTE -->
    <?php if( has_post_thumbnail() ) { // check for feature image ?>
      <section id="section-tourne" class="section-stage page-section parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php echo $thumbnail_url; ?>">
        <div class="container">
          <div class="row">
              <div class="col-lg-12 align-self-end">
              <h2 class="heading-secondary text-white">
              <?php  $my_postid = 66;//This is page id or post id
                $content_post = get_post($my_postid);
                $title= $content_post->post_title;
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
              ?>
                <span class=""><?php echo $title; ?></span>
              </h2>
             
              </div>
              <div class="col-lg-12">
                <p class="text-white-75 font-weight-light"></p>
                <div class="btn-cta">
                  <a href="#section-tourne-video" type="submit" class="btn btn--primary js-scroll-trigger">En Savoir Plus</a>
              </div>
              </div>
            </div>
          <div><!-- ./container -->
      </section> 
    
    <?php } else { // fallback image ?>
    
    <section id="section-tourne" class="section-stage page-section parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/tourne-hero2.jpg">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 align-self-end">
              <h2 class="heading-secondary text-white">
                <?php  $my_postid = 66;//This is page id or post id
                  $content_post = get_post($my_postid);
                  $title= $content_post->post_title;
                  $content = $content_post->post_content;
                  $content = apply_filters('the_content', $content);
                  $content = str_replace(']]>', ']]&gt;', $content);
                ?>
                <span class=""><?php echo $title; ?></span>

              </h2>
             
              </div>
              <div class="col-lg-12">
                <p class="text-white-75 font-weight-light"></p>
                <div class="btn-cta">
                  <a href="#section-tourne-video" type="submit" class="btn btn--primary js-scroll-trigger">En Savoir Plus</a>
              </div>
              </div>
            </div>
          <div><!-- ./container -->
    </section>
    
    <?php } ?>
    
    <!-- TOURNE PROJECTS -->
    <section id="section-tourne-video" class="section-tourne page-section">
      <div class="container">
        <div class="content-section-heading text-center">
          
          <h2 class="mb-5 heading-secondary heading-secondary--1"><?php echo $section_subheading; ?></h2>
          <p class="text-secondary mb-0"><?php echo $section_subdescription; ?></p>
        </div>

        <div class="row no-gutters">
          <?php $loop = new WP_Query( array( 'post_type' => 'mes_tournee', 'posts_per_page'=>4, 'orderby' => 'post_id', 'order' => 'DESC' ) ); ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); 
            
          ?>
            <div class="col-lg-6">
              <div class="gallery">
                <div class="gallery__item" href="#!">
                  <span class="caption">
                    <span class="caption-content">
                      <h4><?php the_title(); ?></h4>
                      <p class="mb-0"></p>
                    </span>
                  </span>
                  <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url(); }?>" alt="">
                </div>
              </div>
            </div>
          <?php endwhile; wp_reset_query(); ?>
          
          
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="btn-cta">
             <!-- <a href="tourne.html" type="submit" class="btn btn--primary mx-auto">Visite La Page</a> -->
            </div>
          </div>
        </div><!-- ./cta -->

      </div>
    </section>