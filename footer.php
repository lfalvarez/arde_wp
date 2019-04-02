<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package arde-tema
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper footer-arde" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-12 d-flex justify-content-center">
				<a class="navbar-brand" href="<?php echo site_url(); ?>">
						<img class='logo-minisitio' src="<?php bloginfo('template_url'); ?>/img/arde-logo-sin-frase.png" alt="arde">
					</a>

			</div><!--col end -->

		</div><!-- row end -->
		<div class="row">

			<div class="col-10">

				<!-- suscríbete-->
			</div><!--col end -->
			<div class="col-2">

				<?php $link_slug = 'colecciones'; include('global-templates/link-to-page.php'); ?>

	      <?php $link_slug = 'editorial'; include('global-templates/link-to-page.php'); ?>
	      <?php $link_slug = 'sobre-archivos'; include('global-templates/link-to-page.php'); ?>
	      <?php $link_slug = 'sobre-nosotros'; include('global-templates/link-to-page.php'); ?>
				<a class="nav-link" href="https://www.facebook.com/archivoarde/"><i class="fab fa-facebook-f"></i>  /archivoarde</a>
				<a class="nav-link" href="#"><i class="fab fa-instagram"></i> /elinstagran</a>
			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/retina.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</body>

</html>
