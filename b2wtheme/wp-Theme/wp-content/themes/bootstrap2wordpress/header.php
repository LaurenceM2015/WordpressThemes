<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_To_Wordpress
 */



?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

<!-- no need to add a custom stylesheet here -->

<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>
	
	<!-- HEADER
	================================================== -->
	<header class="site-header" role="banner">
		
		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">
			
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress Theme"></a>
						
					</div><!-- navbar-header -->
					
					<!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->
					
						
					<?php
						wp_nav_menu( array(
							
							'theme_location'    => 'menu-1',
							'container'         => 'nav',
							'container_class'   => 'navbar-collapse collapse',
							'menu_class'        => 'nav navbar-nav navbar-right'
							
						) );
					?>
					
				</div><!-- container -->
				
			</div><!-- navbar -->
			
		</div><!-- navbar-wrapper -->
		
	</header>
