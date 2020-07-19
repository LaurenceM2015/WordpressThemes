<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Landing_Page
 */
   
 /*

     Template Name: Home Page
*/


get_header();
?>
  

        <!-- MASTER HEADER
    ======================================================-->
    <?php get_template_part('content','hero'); ?>
  
    <!-- MUSIC SECTION
    ================================================== --> 
    <?php get_template_part('content','music-video'); ?>

     <!-- TOURNE SECTION
    ================================================== --> 
   <?php get_template_part('content', 'tourne'); ?>

    <!-- EMISSION SECTION
    ================================================== -->
    <?php get_template_part('content', 'talkshow'); ?>
    
  
     <!-- MOVIES SECTION
     ================================================== --> 
     <?php get_template_part('content', 'movies'); ?>


    
     <!-- ABOUT SECTION
     ================================================== --> 
    <?php get_template_part('content', 'about'); ?>

    <!-- CONTACT SECTION
     ================================================== -->
   <?php get_template_part('content', 'contactUs'); ?>


<?php

get_footer();
/*

     Template Name: Home Page
    
*/