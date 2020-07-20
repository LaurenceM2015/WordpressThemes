<?php 
    // Feature Image
    $thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id(99) );

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
    //$section_button_text    = get_field('section_button_text'); // Can't found the field
    
     //print_r($section_talk_show_subheading);
     // text wow fade in ()
?>

 <!-- Section Talk show bg image -->
<!-- FEATURE IMAGE
	================================================== -->
  <?php if( has_post_thumbnail() ) { // check for feature image ?>
  
  <section id="talkshow" class="section-stage page-section h-100 parallax-window" data-z-index="0" data-parallax="scroll" data-image-src="<?php echo $thumbnail_url; ?>">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
        
        <?php  $my_postid = 99;//This is page id or post id
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
        <?php  $my_postid = 591;//This is page id or post id
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
      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-lg-0">
          <div class="col-lg-6 embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/W5xBlbtQMOg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NzgW8poOR1w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </div>
      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
          <div class="col-lg-6 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aGZ6ohejeoM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        
          <div class="col-lg-6 embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ku6hRHCfj60" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="btn-cta">
               <!-- <a href="emission.html" type="submit" class="btn btn--primary mx-auto">Visite La Page</a> -->
              </div>
            </div>
          </div><!-- call on action -->
      </div>
    </div>
  </section>