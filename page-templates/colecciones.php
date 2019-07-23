<?php
/**
 * Template Name: Colecciones
 *
 * Template para desplegar un minisitio.
 *
 * @package arde-tema
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="row encabezado-imagen" <?php 

  $featured_img_url = get_the_post_thumbnail_url($post->ID, 'large'); 

  echo 'style="background-image: url('.$featured_img_url.'); background-repeat: no-repeat; background-size: cover; background-position: center;"'; 

  ?>>

  <div class="col-12">
      <h1 class="text-center text-uppercase titulo-encabezado-imagenes text-light">Colecciones</h1>
  </div>

</div>

<?php get_template_part( 'global-templates/listar-minisitios-sin-titulo' ); ?>

<?php get_footer(); ?>