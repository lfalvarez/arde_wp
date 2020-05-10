<?php
/**
 * Template Name: Sobre Nosotros
 *
 * Template para mostrar sobre nosotros
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
      <h1 class="text-center text-uppercase titulo-encabezado-imagenes text-light">Quiénes Somos</h1>
  </div>

</div>

<div class="container">

      <div class="row lista colecciones">

        <div class="col-10 offset-1">


          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile;endif;?>

        </div>

  </div>
</div>

<?php get_footer(); ?>