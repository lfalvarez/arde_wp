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
		<div class="row my-3">

			<div class="col-md-9">
				<!-- Suscríbete-->

			</div><!--col end -->
			<div class="col-md-3 text-center text-md-left">

				<a class="nav-link" href="<?php echo site_url(); ?>">Inicio</a>
				<a class="nav-link" href="http://proyectoarde.org/data/dataset" target="_blank">Archivo</a>
				<a class="nav-link navbar-arde" href="#">Colecciones</a>
	      		<?php $link_slug = 'editorial'; include('global-templates/link-to-page.php'); ?>
	      		<a class="nav-link navbar-arde" href="#">Sobre archivo</a>
	      		<?php $link_slug = 'sobre-nosotros'; include('global-templates/link-to-page.php'); ?>
			</div><!--col end -->

		</div><!-- row end -->

		<div class="row my-3">

			<div class="col-md-9 text-light small">
				<!-- Info Sitio-->
				<div><img class="mr-md-2" src="<?php bloginfo('template_url'); ?>/img/icono-footer-arde.png"/>©<?php the_date('Y'); ?>_proyecto_arde</div>
			</div><!--col end -->

			<div class="col-md-3">
				<!-- RRSS-->
		        <ul class="navbar-nav ml-auto">
		            <li class="nav-item">
		                <a class="nav-link" href="https://www.facebook.com/archivoarde/" target="_blank"><i class="fab fa-facebook-square"></i></a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="https://www.instagram.com/proyectoarde/" target="_blank"><i class="fab fa-instagram"></i></a>
		            </li>
		        </ul>

			</div><!--col end -->

		</div>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/retina.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</body>

</html>
