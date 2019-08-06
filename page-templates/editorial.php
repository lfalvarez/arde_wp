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

  <header class="entry-header">

    <div class="col-12">

        <?php
        $query = new WP_Query( array( 'category_name' => 'editorial' ) );
        ?> 
         <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

  <div
  <?php if (has_post_thumbnail($post)): ?>
    class="landing-image bg-minisitio-con-imagen"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');
           background-repeat: no-repeat;
           background-size: cover;"
  <?php else: ?>
    class="landing-image bg-minisitio"

  <?php endif; ?>
  >

            <div class="container">
              
              <div class="card-body">
                <a href="<?php echo get_permalink(); ?>"><p class="card-text text-center"><?php the_title(); ?></p></a>
              </div>
            </div>

    </div>

  </header><!-- .entry-header -->

</div>

<div class="container">

  <div class="row">
    <div class="col-2">

           <?php endwhile;
             wp_reset_postdata();
           ?>
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

<?php get_footer(); ?>