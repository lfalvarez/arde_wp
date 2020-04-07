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
		<div class="row my-3 py-3">

			<div class="col-md-10 text-center text-md-left">

				<!-- Suscríbete-->
				<div>
					<p class="text-uppercase text-light small">mantente informado inscribiéndote<br>a nuestra lista de mails</p>
				</div>
		
		        <!-- Begin MailChimp Signup Form -->
		        <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
		        <style type="text/css">
		          #mc_embed_signup{clear:left; width:100%;}
		          /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
		             We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
		        </style>
		        <div style="text-align: left;" id="mc_embed_signup">
		        <form action="https://estudioruiz.us18.list-manage.com/subscribe/post?u=3ed0024a25f32863e0dacbf27&amp;id=b6d928c419" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		            <div id="mc_embed_signup_scroll">
		            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Tu e-mail acá" required>
		            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3ed0024a25f32863e0dacbf27_b6d928c419" tabindex="-1" value=""></div>
		            <div class="clear"><input type="submit" value="Suscribirse" name="Suscribirse" id="mc-embedded-subscribe" class="button"></div>
		            </div>
		        </form>
		        </div>

			</div><!--col end -->
			<div class="col-md-2 gt-america text-center text-md-left small">

				<a class="nav-link" href="<?php echo site_url(); ?>">Inicio</a>
				<a class="nav-link" href="http://archivo.proyectoarde.org" target="_blank">Archivo</a>
				<a class="nav-link navbar-arde" href="#">Galerías</a>
	      		<?php $link_slug = 'editorial'; include('global-templates/link-to-page.php'); ?>
	      		<a class="nav-link navbar-arde" href="#">Materiales</a>
	      		<?php $link_slug = 'sobre-nosotros'; include('global-templates/link-to-page.php'); ?>
			</div><!--col end -->

		</div><!-- row end -->

		<div class="row my-3">

			<div class="col-md-10 text-light small text-center text-md-left">
				<!-- Info Sitio-->
				<div><img class="mr-2" src="<?php bloginfo('template_url'); ?>/img/icono-footer-arde.png"/>©<?php echo date("Y"); ?>c_proyecto_arde</div>
			</div><!--col end -->

			<div class="col-md-2">
				<!-- Menú RRSS -->
                <nav class="d-none d-md-block">
                <?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu',
                                          'sort_column'  => 'menu_order',
                                          'depth'        => 1,
                                          'items_wrap' => '<ul class="%2$s navbar-nav ml-auto"><li class="nav-item">%3$s</li></ul>'
                 ) ); ?>
                </nav>
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
