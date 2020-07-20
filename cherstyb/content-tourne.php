    <?php
     
     // About Page Feature Image
        $thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id(69) );
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
                <span class="">Tourné</span>
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
    
    
    <section id="section-tourne" class="section-stage page-section parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/tourne-hero.jpg">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 align-self-end">
              <h2 class="heading-secondary text-white">
                <span class="">Tourné</span>
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
          <h3 class="text-secondary mb-0"></h3>
          <h2 class="mb-5"></h2>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <div class="gallery">
              <div class="gallery__item" href="#!">
                <span class="caption">
                  <span class="caption-content">
                    <h4>Tourn One</h4>
                    <p class="mb-0">Tourne</p>
                  </span>
                </span>
                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tourne1.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="gallery">
              <div class="gallery__item" href="#!">
                <span class="caption">
                  <span class="caption-content">
                    <h4>Tourne One</h4>
                    <p class="mb-0">Tourne two</p>
                  </span>
                </span>
                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tourne2.jpg" alt="">
              </div>
            </div>
          </div>
          
          
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