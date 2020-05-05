<?php
/**
 * Template Name: Materiales
 *
 * Template para mostrar la Editorial.
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

  echo 'style="background-image: url('.$featured_img_url.'); background-repeat: no-repeat; background-size: cover; background-position: center; margin: 0 auto; "'; 

  ?>>

  <div class="col-12">
    <div style="margin: 70px 0;" class="titulo-encabezado-imagenes">
        <h1 class="text-center text-uppercase titulo-encabezado-imagenes mb-3 text-light"><?php the_title() ?></h1>
        <div class="bajada-titulo-encabezado-imagenes text-center text-light mx-auto gt-america"><div><?php echo the_excerpt() ?></div></div>
      </div>

  </div>

</div>

<?php get_footer(); ?>
