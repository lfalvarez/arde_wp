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
	<?php if (( is_front_page() && is_home() )) : ?>
		<div class="hero-container">
	<?php endif; ?>
	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="<?php if (( is_front_page() && is_home() )){
		echo 'navbar-only-in-home';
	}
	?>" itemscope itemtype="http://schema.org/WebSite"

	>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark <?php if ( is_front_page() && is_home() ) : ?>bg-arde<?php else : ?>bg-minisitio<?php endif; ?>"
			>




		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

				<a class="navbar-brand" href="<?php echo site_url(); ?>">
				    <img class='logo-minisitio' src="<?php bloginfo('template_url'); ?>/img/logo-arde-blanco.png" alt="arde">
				</a>


				<?php include('global-templates/navbar_links.php') ?>
				<div class="d-none d-md-block">
		        <ul class="navbar-nav ml-auto">
		            <li class="nav-item">
		                <a class="nav-link" href="https://www.facebook.com/archivoarde/" target="_blank"><i class="fab fa-facebook-square"></i></a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="https://www.instagram.com/proyectoarde/" target="_blank"><i class="fab fa-instagram"></i></a>
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
