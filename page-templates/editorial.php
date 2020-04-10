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

            </div>

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

    <article class="row">

  <?php if (have_posts()) : ?>
    
    <?php 

    $args = array (
      'cat' => 5,
      'offset' => 1
    );

    query_posts($args) ?>

    <?php while (have_posts()) : the_post(); ?>

            <div class="card col-md-4 border-0">

            <a href="<?php echo get_permalink(); ?>">

            <div

            <?php if (has_post_thumbnail($post)): ?>
                class="document-image"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');
                       background-repeat: no-repeat;
                       background-size: cover;"
            >

            </div>

            <?php the_title( '<div class="card-body text-center">', '</div>' ); ?> <!-- titulo -->

            </a>

            </div>

            <?php endif; ?>

            <?php endwhile; ?>

    <?php endif; ?>

    </article>

</div>

</div>
</div>

<?php get_footer(); ?>