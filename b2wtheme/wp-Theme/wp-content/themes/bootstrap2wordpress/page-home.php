<?php
/*
	Template Name: Home Page
*/


get_header();
?>
	
	   <!-- HERO
    ================================================== -->
   	<?php get_template_part('content', 'hero'); ?>
   	
   	
   	<?php get_template_part('content', 'OptInSection'); ?>
   	
   	<!-- Boost Your Income 
   	================================================= -->
   	
   	<?php get_template_part('content', 'boostincome'); ?>
   	
   	<!-- WHO BENEFITS
	================================================== -->
   	
   	<?php get_template_part('content', 'whobenefit'); ?>
   	
 
	<!-- COURSE FEATURES
	================================================== -->
	
	<?php get_template_part('content', 'coursefeature'); ?>
	
	
	<!-- PROJECT FEATURES
	================================================== -->
	<?php get_template_part('content', 'projectfeature'); ?>
	
	
	
	<!-- VIDEO FEATURETTE
	================================================== -->
	<?php get_template_part('content', 'featuretted'); ?>
	
	<!-- INSTRUCTOR
	================================================== -->
	<?php get_template_part('content', 'instructor'); ?>
	
	
	<?php get_template_part('content', 'testimonial'); ?>



<?php get_footer();