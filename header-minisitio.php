<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package arde-tema
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<style type="text/css" media="screen, print">
		@font-face {
			font-family: "GT America Mono";
			src: url("<?php echo bloginfo('template_url'); ?>/fonts/GTAmericaMono-Regular.woff") format("woff");
		}
  </style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">
	<div
	<?php if (has_post_thumbnail($post)): ?>
		class="landing-image bg-minisitio-con-imagen"
		style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');
					 background-repeat: no-repeat;
					 background-size: cover;"
	<?php else: ?>
		class="landing-image bg-minisitio"

	<?php endif; ?>
	>
	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite"

	>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark"
			>




		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

				<?php if (!( is_front_page() && is_home() )) : ?>
					<a class="navbar-brand" href="<?php echo site_url(); ?>">
					    <img class='logo-minisitio' src="<?php bloginfo('template_url'); ?>/img/arde-logo-sin-frase.png" alt="arde">
					  </a>
				<?php endif; ?>

				<?php include('global-templates/navbar_links.php') ?>
				<div class="order-3">
		        <ul class="navbar-nav ml-auto">
		            <li class="nav-item">
		                <a class="nav-link" href="https://www.facebook.com/archivoarde/"><i class="fab fa-facebook-f"></i></a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
		            </li>
		        </ul>
		    </div>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->



	<header class="entry-header">

		<?php the_title( '<h1 class="minisitio-title text-center">', '</h1>' ); ?>

	</header><!-- .entry-header -->
</div>
