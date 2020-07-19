<?php 
    /* Template Name: Contact Moi */
    get_header('menu2');

    // Contact Info:
    $section_contact_heading          = get_field('section_contact_heading');
    $section_contact_address_title    = get_field('section_contact_address_title');
    $section_contact_address_body     = get_field('section_contact_address_body');

    $section_contact_telephone_title  = get_field('section_contact_telephone_title');
    $section_contact_telephone_body   = get_field('section_contact_telephone_body');

    $section_contact_email_title      = get_field('section_contact_email_title');
    $section_contact_email            = get_field('section_contact_email');

    $social_media_heading             = get_field('social_media_heading');
    $twitter_username                 = get_field('twitter_username');
    $facebook_username                = get_field('facebook_username');
    $youtube_username                 = get_field('youtube_username');

  
  // Feature Image
  $thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<!-- FEATURE IMAGE
	================================================== -->
  <?php if( has_post_thumbnail() ) { // check for feature image ?>
  
  <header class="section-stage page-section h-100 parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php echo $thumbnail_url; ?>">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
        <h1 class="text-uppercase text-white heading-primary">
          <span class="heading-primary--main"><?php the_title(); ?></span>
        </h1>
        <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
        <p class="text-white-75 font-weight-light mb-5"></p>
        
        </div>
      </div>
    <div>
  </header>

<?php } else { // fallback image ?>
	
	<header class="parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/WhatsApp-Image.jpg">

		<div class="container h-100">
			<div class="row h-100 align-items-center justify-content-center text-center">
			  <div class="col-lg-10 align-self-end">
				<h1 class="text-uppercase text-white heading-primary">
					<span class="heading-primary--main"><?php the_title(); ?></span>
				</h1>
				<hr class="divider my-4">
			  </div>
			  <div class="col-lg-8 align-self-baseline">
				<p class="text-white-75 font-weight-light mb-5">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; // end of the loop ?>
        </p>
			   
			  </div>
			</div>
		<div>
	</header>
	
<?php } ?>

  <!-- FORM SECTION
  ================================================== --> 
  <section id="contact" class="page-section">
    <div class="container">
      <!-- social media -->
      <div class="animated fadeIn  text-center py-5">
        <div class="row my-5 ">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Address</h4>
                                    <hr class="my-4">
                                 <div class="small text-black-50">London, United kingdom</div>
                            </div>
                        </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Téléphone</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                +44 7931 818614</div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4">
                                <div class="small text-black-50">
                                    <abbr title="Email"></abbr>
                                    <a href="mailto:info@gmail.com">info@gmail.com</a>
                                </div>
                            </div>
                        </div>
        </div>
                
      </div> <!-- row -->
                    
      </div><!-- fade in -->
      <div class="text-center py-5">
        <h3 class="text-uppercase text-mute">Interested in having Chersty B at your event?</h3>
        <h4 class="section-subheading text-mute">Submit your inquiry by completing the form below.</h4>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                                    
                <div class="form-group">
                  <input type="text" name="contact-name" value="" size="40" class="form-control" id="contact-name" aria-required="true" aria-invalid="false" placeholder="Your Full Name" />
                  <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                                        <input type="text" name="contact-reason" value="" size="40" class="form-control" id="contact-reason" aria-invalid="false" placeholder="Vellez Entre La reason" />
                                        <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                                        <input type="email" name="contact-email" value="" size="40" class="form-control" id="contact-email" aria-required="true" aria-invalid="false" placeholder="Vellez Ecrire Votre Email" />
                                        <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                                        <input type="tel" name="contact-tel" value="" size="40" class="form-control" id="contact-tel" aria-required="true" aria-invalid="false" placeholder="Vellez Ecrire Votre Numero De Telephone" />
                                        <p class="help-block text-danger">
                </div>

                <div class="form-group">
                                        <input type="text" name="text-167" value="" size="40" class="form-control" id="contact-time" aria-required="true" aria-invalid="false" placeholder="A Quelle Heure" />
                                        <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                                        <input type="date" name="date-942" value="contact-date" class="form-control" id="contact-date" min="2019-05-19" max="2020-12-19" aria-invalid="false" />
                                        <p class="help-block text-danger"></p>
                </div><!-- Event Date -->
              </div><!-- ./col-md-6 -->
      
              <div class="col-md-6">
                                    
                                    <div class="form-group">
                                    <input type="text" name="contact-venue" value="" size="40" class="form-control" id="contact-venue" aria-invalid="false" placeholder="Le Nom De Venue" />
                                        <p class="help-block text-danger"></p>
                                    </div><!-- Venue Name -->
                                
                                    <div class="form-group">
                                        <input type="text" name="contact-town" value="" size="40" class="form-control" id="contact-road" aria-invalid="false" placeholder="Vellez Mettre le Numero et le Non de la Maison" />
                                        <p class="help-block text-danger"></p>
                                    </div><!-- Town Name -->
                                
                                    <div class="form-group">
                                        <input type="text" name="contact-town" value="" size="40" class="form-control" id="contact-road" aria-invalid="false" placeholder="Vellez Mettre le Non de la Rue" />
                                        <p class="help-block text-danger"></p>
                                    </div><!-- contact road -->
                                
                                    <div class="form-group">
                                        <input type="text" name="contact-town" value="" size="40" class="form-control" id="contact-town" aria-invalid="false" placeholder="Vellez Mettre le nom de la Ville ici" />
                                        <p class="help-block text-danger"></p>
                                    </div><!-- County Name -->

                                    <div class="form-group">
                                        <input type="text" name="contact-postcode" value="" size="40" class="form-control" id="contact-postcode" aria-invalid="false" placeholder="Vellez Ecrire le Codepostal" />
                                        <p class="help-block text-danger"></p>
                                    </div><!-- Post Code -->
                                
                                    <div class="form-group">
                                        <input type="text" name="country" value="" size="40" class="form-control" id="contact-country" aria-invalid="false" placeholder="contact country" /></span></p>
                                        <p class="help-block text-danger"></p>
                                    </div><!-- Country Venue -->
              </div> <!-- ./Venue Details -->
          
              <div class="col-md-12">
                                    <div class="form-group py-5">
                                        <textarea name="textarea" cols="40" rows="10" class="form-control" id="contact-message" aria-invalid="false" placeholder="contact message"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
              </div><!-- ./ textarea -->
      
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <input type="submit" value="Send Message" class="btn btn--primary btn-xl text-uppercase" id="sendMessageButton" />
              </div>
            </div><!-- ./row -->
          </form>
        </div><!-- col-lg-12 -->
      </div><!-- ./row -->
    </div><!-- ./container -->
  </section>

  <section id="signup" class="signup-section page-section h-100 parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/contact.jpg">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                  <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                  <h2 class="text-white mb-5">Suive Moi Dans Les Reseau Social!</h2>
      
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
      
                </div>
              </div>
            </div>
  </section>

<!-- Global Footer Goes Here. -->
<?php get_footer(); ?>