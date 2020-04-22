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

<div class="posteo">

<?php if (have_posts()) : ?>
    
    <?php 

    $args = array (
      'cat' => 5,
      'showposts' => 1
    );

    query_posts($args) ?>

        <?php while (have_posts()) : the_post(); ?>

            <article>

            <div

            <?php if (has_post_thumbnail($post)): ?>
                class="landing-image-editorial"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');
                       background-repeat: no-repeat;
                       background-size: cover;"
            >

            <a class="container-fluid" href="<?php echo get_permalink(); ?>">

            <header>

                <div style="width: 30px;"><hr style="border: 1.5px solid; margin: 0;"></div>

                <?php the_title( '<h1 class="text-left pb-5">', '</h1>' ); ?>

                <div>

                <div class="float-md-right gt-america small mitad">

                <?php echo the_excerpt(); ?>

                <p class="pt-3 small"><?php the_date(); ?> — escrito por <?php the_author(); ?></p>

                </div>

                </div>

                <span></span>

            </header> <!-- .entry-header -->

            </a>

            </div>

            </article>

            <?php endif; ?>

            <?php endwhile; ?>

<?php endif; ?>

</div>

<div class="container-fluid cuerpo-central-editorial">

<div class="row titulo-colecciones-home">

    <div class="col-12">
        <div class="text-center text-uppercase titulo">Artículos Recientes</div>
    </div>

</div>

<?php
      $query = new WP_Query
      (array(
                 'posts_per_page'   => 20,
                 'cat' => 5,
             )
       );

       while ($query->have_posts()): $query->the_post(); ?>
                <div class="card col-md-4 border-0">

                  <a href="<?php echo get_permalink(); ?>">

                    <div class="document-image" style='background-image:url("<?php if(has_post_thumbnail()){
                      the_post_thumbnail_url();
                    }
                    else {
                      echo bloginfo('template_url').'/img/arde-logo.png';
                    }
                    ?>")'></div>
                  
                  <?php the_title( '<div class="text-left">', '</div>' ); ?> <!-- titulo -->
                  <div style="color: #b1b1b0;" class="mt-2 text-left small-70"><?php echo the_excerpt() ?></div>

                  </a>
                </div>
<?php endwhile;?>

</div>

</div>
</div>

<?php get_footer(); ?>