<?php
?>


 <!-- div gallery -->
 <section class="section-gallery page-section">
    
  <div class="container-fluid py-5 px-0 bg-faded">
    <h2 class="heading-secondary heading-secondary--1 mb-5 pb-5 text-center">Nos gallery</h2>
    <div class="card-columns galleryShowcase">
      <?php $loop = new WP_Query( array( 'post_type' => 'chersty_gallery', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
      
      <div class="card parent">
          <div class="child">
          <img class="card-img-top img-fluid" src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url(); }?>" alt="">
            <span><?php the_title(); ?></span>
        </div>
      </div>
          <?php endwhile; wp_reset_query(); ?>
      </div>
  </div>
   
  </section>