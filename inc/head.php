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

    <!-- Estilos -->

	<style type="text/css" media="screen, print">
		@font-face {
			font-family: "GT America Mono";
			src: url("<?php echo bloginfo('template_url'); ?>/fonts/GT-America-Mono-Regular.otf") format("opentype");
		}
  	</style>
  	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css" />

    <!-- Favicon -->

	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://beta.proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://beta.proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://beta.proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://beta.proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="http://beta.proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="http://beta.proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="http://beta.proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="http://beta.proyectoarde.org/wp-content/themes/arde_wp/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="http://beta.proyectoarde.org/wp-content/themes/arde_wp/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="http://beta.proyectoarde.org/wp-content/themes/arde_wp/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="http://beta.proyectoarde.org/wp-content/themes/arde_wp/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="http://beta.proyectoarde.org/wp-content/themes/arde_wp/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="http://beta.proyectoarde.org/wp-content/themes/arde_wp/favicon-128.png" sizes="128x128" />
	<link rel="shortcut icon" href="http://beta.proyectoarde.org/wp-content/themes/arde_wp/favicon.ico" />
	<meta name="application-name" content="Proyecto Arde"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="http://beta.proyectoarde.org/wp-content/themes/arde_wp/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="http://beta.proyectoarde.org/wp-content/themes/arde_wp/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="http://beta.proyectoarde.org/wp-content/themes/arde_wp/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="http://beta.proyectoarde.org/wp-content/themes/arde_wp/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="http://beta.proyectoarde.org/wp-content/themes/arde_wp/mstile-310x310.png" />

    <!-- Open Graph data -->

    <meta property="og:title" content="Proyecto Arde - Archivo de Procesos Artísticos" />
    <meta property="og:type" content="artist" />
    <meta property="og:url" content="https://proyectoarde.org">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/XXX-fb-redes-sociales.png" />
    <meta property="og:description" content="Archivo de Procesos Artísticos">
    <meta property="og:site_name" content="Proyecto Arde" />

    <!-- Twitter Card -->

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Proyecto Arde - Archivo de Procesos Artísticos" />
    <meta name="twitter:description" content="Archivo de Procesos Artísticos" />
    <meta name="twitter:url" content="https://proyectoarde.org" />

    <!-- Twitter Summary card images must be at least 200x200px -->

    <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/img/XXX-fb-redes-sociales.png">

	<?php wp_head(); ?>
</head>
