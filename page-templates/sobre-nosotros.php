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
          <h1 class="text-center text-uppercase titulo"><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_title();
          endwhile;endif;?></h1>
      </div>
  </div>
      <div class="row lista colecciones">

        <div class="col-10 offset-1">


          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile;endif;?>

        </div>

  </div>
</div>

<?php get_footer(); ?>
