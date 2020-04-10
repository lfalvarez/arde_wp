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
include(TEMPLATEPATH.'/inc/head.php');
$container = get_theme_mod( 'understrap_container_type' );
?>

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
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

				<?php if (!( is_front_page() && is_home() )) : ?>
					<a class="navbar-brand" href="<?php echo site_url(); ?>">
					    <img class='logo-minisitio' src="<?php bloginfo('template_url'); ?>/img/arde-logo-sin-frase.png" alt="arde">
					  </a>
				<?php endif; ?>

				<?php include('global-templates/navbar_links.php') ?>

				<!-- Menú RRSS -->
                <nav class="d-none d-md-block">
                <?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu',
                                          'sort_column'  => 'menu_order',
                                          'depth'        => 1,
                                          'items_wrap' => '<ul class="%2$s navbar-nav ml-auto"><li class="nav-item">%3$s</li></ul>'
                 ) ); ?>
                </nav>
                
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
