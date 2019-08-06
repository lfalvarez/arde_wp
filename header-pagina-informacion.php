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
<?php include(TEMPLATEPATH.'/inc/head.php'); ?>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark">

			<div class="container">

				<a class="navbar-brand" href="<?php echo site_url(); ?>">
					    <img src="<?php bloginfo('template_url'); ?>/img/arde-logo-sin-frase.png" height="30" alt="arde">
			  </a>

				<?php include('global-templates/navbar_links.php') ?>

            <div class="order-3 d-none d-md-block">
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
			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
