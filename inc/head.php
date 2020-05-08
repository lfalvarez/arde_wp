<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <!-- Metas Esenciales -->

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Títulos cabecera sitio -->

    <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?><?php } ?> <?php wp_title(); ?></title>
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">

    <!-- Fuentes -->

	<style type="text/css" media="screen, print">
		@font-face {
			font-family: "GT America Mono";
			src: url("<?php echo bloginfo('template_url'); ?>/fonts/GT-America-Mono-Regular.otf") format("opentype"),
		         url("<?php echo bloginfo('template_url'); ?>/fonts/GT-America-Mono-Regular.woff2") format('woff2'),
		         url("<?php echo bloginfo('template_url'); ?>/fonts/GT-America-Mono-Regular.woff") format('woff'),
		         url("<?php echo bloginfo('template_url'); ?>/fonts/GT-America-Mono-Regular.ttf") format('truetype');
		}
		@font-face {
			font-family: "GT America";
			src: url("<?php echo bloginfo('template_url'); ?>/fonts/GT-America-Regular.otf") format("opentype"),
		         url("<?php echo bloginfo('template_url'); ?>/fonts/GTAmerica-Regular.woff2") format('woff2'),
		         url("<?php echo bloginfo('template_url'); ?>/fonts/GTAmerica-Regular.woff") format('woff'),
		         url("<?php echo bloginfo('template_url'); ?>/fonts/GTAmerica-Regular.ttf") format('truetype');
		}
  	</style>

	<!-- JavaScript -->
	
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <!-- Estilos -->

  	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/slick/slick.css" />
  	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/slick/slick-theme.css" />
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.css" />
  	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" media="screen">

    <!-- Favicon -->

	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="http://proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="http://proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="http://proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="http://proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="http://proyectoarde.org/wp-content/themes/arde_wp/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="http://proyectoarde.org/wp-content/themes/arde_wp/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="http://proyectoarde.org/wp-content/themes/arde_wp/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="http://proyectoarde.org/wp-content/themes/arde_wp/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="http://proyectoarde.org/wp-content/themes/arde_wp/favicon-128.png" sizes="128x128" />
	<link rel="shortcut icon" href="http://proyectoarde.org/wp-content/themes/arde_wp/favicon.ico" />
	<meta name="application-name" content="Proyecto Arde"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="http://proyectoarde.org/wp-content/themes/arde_wp/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="http://proyectoarde.org/wp-content/themes/arde_wp/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="http://proyectoarde.org/wp-content/themes/arde_wp/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="http://proyectoarde.org/wp-content/themes/arde_wp/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="http://proyectoarde.org/wp-content/themes/arde_wp/mstile-310x310.png" />

    <!-- Open Graph data -->

    <meta property="og:title" content="Proyecto Arde - Archivo de Procesos Artísticos" />
    <meta property="og:type" content="artist" />
    <meta property="og:url" content="<?php echo the_permalink(); ?>">
    <meta property="og:image" content="http://proyectoarde.org/wp-content/themes/arde_wp/img/proyecto-arde-redes-sociales.png" />
    <meta property="og:description" content="Archivo de Procesos Artísticos">
    <meta property="og:site_name" content="Proyecto Arde" />

    <!-- Twitter Card -->

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Proyecto Arde - Archivo de Procesos Artísticos" />
    <meta name="twitter:description" content="Archivo de Procesos Artísticos" />
    <meta name="twitter:url" content="<?php echo the_permalink(); ?>" />

    <!-- Twitter Summary card images must be at least 200x200px -->

    <meta name="twitter:image" content="http://proyectoarde.org/wp-content/themes/arde_wp/img/proyecto-arde-redes-sociales.png">

	<?php wp_head(); ?>
	
</head>
