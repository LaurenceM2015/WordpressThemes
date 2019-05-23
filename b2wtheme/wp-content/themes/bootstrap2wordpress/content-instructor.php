<?php 

	/* INSTRUCTOR SECTION TITLE */

	$instructor_section_title = get_field('instructor_section_title');
	$instructor_name 		  = get_field('instructor_name');
	$boi_excerpt 			  = get_field('boi_excerpt');
	$full_bio 				  = get_field('full_bio');
	$twitter_username 		  = get_field('twitter_username');
	$facebook_username 		  = get_field('facebook_username');
	$google_plus_username 	  = get_field('google_plus_username');

	$number_tab_tittle 	  	  = get_field('number_tab_tittle');
	$number_tab_small_text 	  = get_field('number_tab_small_text');

	$num_student 	  		  = get_field('num_student');
	$num_reviews 	  		  = get_field('num_reviews');
	$number_courses 	  	  = get_field('number_courses');



?>

<section id="instructor">
	<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_name; ?></small></h2>
						</div><!-- end col -->
						
						<div class="col-lg-4">
						
							<?php if( !empty($twitter_username) ) : ?>
								<a href="https://twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
							<?php endif; ?>

							<?php if( !empty($facebook_username) ) : ?>
								<a href="https://facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
							<?php endif; ?>
							
							<?php if( !empty($google_plus_username ) ) : ?>
								<a href="https://plus.google.com/<?php echo $google_plus_username; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
							<?php endif; ?>
							
						
							
						</div><!-- end col -->
						
					
					</div><!-- row -->
					
					<p class="lead"><?php echo $boi_excerpt;  ?><p>
					
					<p><?php echo $full_bio;  ?></p>
					
					<hr>
					
					
					<h3><?php echo $number_tab_tittle; ?> <small><?php echo $number_tab_small_text; ?></small></h3>

					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $num_student; ?> <span>Customer</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $num_reviews; ?> <span>Reviews</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $number_courses;?> <span>Themes</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
					</div><!-- row -->
					
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
</section><!-- instructor -->