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

<div class="row encabezado-imagen">
  <div class="col-12"   <?php 

  $featured_img_url = get_the_post_thumbnail_url($post->ID, 'large'); 

  echo '<div style="background-image: url('.$featured_img_url.');"></div>'; 

  ?>>
      <h1 class="text-center text-uppercase titulo-encabezado-imagen">Colecciones</h1>
  </div>
</div>

<div class="container">
      <div class="row lista colecciones">
        <div class="col-2">
          <?php while ( have_posts() ) : the_post(); ?>

          	<?php get_template_part( 'loop-templates/content', 'blank' ); ?>

          <?php endwhile; // end of the loop. ?>
        </div>
      </div>
</div>

<?php get_template_part( 'global-templates/listar-minisitios-sin-titulo' ); ?>

<?php get_footer(); ?>