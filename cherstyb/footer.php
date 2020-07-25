<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_Landing_Page
 */

?>

	

<?php wp_footer(); ?>



  <footer class="footer">
		<div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-4">
          <p class="text-left"><a href="/"><img class="footer__logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cbLogo.png" alt="Chersty B"></a></p>
        </div><!-- end col -->
        <div class="col-md-4">
        <!--
          <nav class="text-center secondary-navbar navbar navbar-expand-sm">
            <ul class="navbar-nav">
              <li class="nav-item"><a href="" class="nav-link">Music</a></li>
              <li class="nav-item"><a href="" class="nav-link">Emission</a></li>
              <li class="nav-item"><a href="" class="nav-link">Mes Enfo</a></li>
            </ul>
          </nav>
-->
            <!-- The WordPress Primary Menu -->
		<?php wp_nav_menu(
			array(
				'theme_location'   => 'menu-2',
				'menu_class'       => 'text-center secondary-navbar navbar navbar-expand-sm justify-content-center',
				'container_class'  => 'navbar-nav',
				
			)
		); ?>
         
        </div><!-- end col -->
        <div class="col-md-4">
          <p class="text-right"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?>  - build by: <a href="http://laurencemalonga.com/" target="_blank"><?php the_author_link(); ?></a></p>
        </div><!-- end col -->
      </div>
		</div><!-- container -->
	</footer>


     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- jquery parallax plugin -->
<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

  <script src="<?php bloginfo('template_directory'); ?>/assets/vendor/js/wow.js"></script>
  <script src="<?php  bloginfo('template_directory'); ?>/assets/js/main.js"></script>
  <script src="<?php  bloginfo('template_directory'); ?>/assets/js/script.js"></script>
  
  <script>
    new WOW().init();
    
  </script>
</body>
</html>

