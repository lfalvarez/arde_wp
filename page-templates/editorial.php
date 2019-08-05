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
      <div class="row lista colecciones">
        <div class="col-2">
            <?php
            /* $query = new WP_Query( array( 'category_name' => 'editorial' ) ); */
            ?> 
             <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                <div class="card" style="width: 18rem;">
                  <a href="<?php echo get_permalink(); ?>">
                      <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" height= alt="<?php the_title(); ?>">
                  </a>
                  <div class="card-body">
                    <a href="<?php echo get_permalink(); ?>"><p class="card-text text-center"><?php the_title(); ?></p></a>
                  </div>
                </div>

               <?php endwhile;
                 wp_reset_postdata();
                  ?>
                 <?php endif; ?>
        </div>
      </div>
</div>

<?php get_footer(); ?>