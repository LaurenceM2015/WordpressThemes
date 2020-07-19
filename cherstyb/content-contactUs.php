<?php

  $section_contact_heading          = get_field('section_contact_heading');
  
  // Contact Details 
  $section_contact_address_title    = get_field('section_contact_address_title');
  $section_contact_address_body     = get_field('section_contact_address_body');

  $section_contact_telephone_title  = get_field('section_contact_telephone_title');
  $section_contact_telephone_body   = get_field('section_contact_telephone_body');

  $section_contact_email_title      = get_field('section_contact_email_title');
  $section_contact_email            = get_field('section_contact_email');

  // Social Media Section
  $social_media_heading             = get_field('social_media_heading');
  $twitter_username                 = get_field('twitter_username');
  $facebook_username                = get_field('facebook_username');
  $youtube_username                 = get_field('youtube_username');

  // For Homepage Contact Section
  $section_contact_page_link        = get_field('section_contact_page_link');
  $page_section_button_text         = get_field('page_section_button_text');

  

?>

 <!-- ABOUT SECTION
     ================================================== --> 
      <!-- CONTACT SECTION
    ================================================== --> 
    <section id="signup" class="signup-section page-section h-100 parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/contact.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">
            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Suivez Moi Dans Les Réseau Sociaux!</h2>

            <div class="social d-flex justify-content-center pb-5">
              <a href="#" class="mx-2">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="mx-2">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="mx-2">
                <i class="fab fa-github"></i>
              </a>
            </div>

            <i class="far fa-envelope fa-2x my-2 text-white"></i>
            <h2 class="text-white mb-5">Ou Ecrivez Moi</h2>
            <a href="contact.html" type="submit" class="btn btn--primary mx-auto">Contact Me</a>

          </div>
        </div>
      </div>
    </section>

