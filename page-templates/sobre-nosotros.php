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
<div class="container">
  <div class='row '>
      <div class="col-12">
          <div class="text-center text-uppercase titulo">Sobre Nosotros</div>
      </div>
  </div>
      <div class="row lista colecciones">
        <div class="col-2">


          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile;endif;?>

        </div>

  </div>
</div>

<?php get_footer(); ?>
