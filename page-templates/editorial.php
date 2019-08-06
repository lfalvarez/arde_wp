<?php
/**
 * Template Name: Editorial
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

<?php
$query = new WP_Query( array( 'category_name' => 'editorial' ) );
?> 
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

 <div
  <?php if (has_post_thumbnail($post)): ?>
    class="landing-image-editorial bg-minisitio-con-imagen"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');
           background-repeat: no-repeat;
           background-size: cover;"
  <?php else: ?>
    class="landing-image-editorial bg-minisitio"

  <?php endwhile;
   wp_reset_postdata();
  ?>

  <?php endif; ?>
  >

 </div>

<a href="<?php echo get_permalink(); ?>">

<header class="entry-header post-destacado">

    <?php the_title( '<h1 class="text-left">', '</h1>' ); ?>

</header> <!-- .entry-header -->

</a>

<div class="container">

  <div class="row titulo-colecciones-home">

    <div class="col-12">
        <div class="text-center text-uppercase titulo">Artículos Recientes</div>
    </div>

  </div>

  <div class="row">

      <div class="col-2">

              <div class="card" style="width: 18rem;">
                <a href="<?php echo get_permalink(); ?>">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" height= alt="<?php the_title(); ?>">
                </a>
                <div class="card-body">
                  <a href="<?php echo get_permalink(); ?>"><p class="card-text text-center"><?php the_title(); ?></p></a>
                </div>
              </div>

              <?php endif; ?>

      </div>

  </div>

  </div>

</div>

</div>

<?php get_footer(); ?>