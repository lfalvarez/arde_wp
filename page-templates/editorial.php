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
      'showposts' => 2
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

            <a href="<?php echo get_permalink(); ?>">

            <header>

                <?php the_title( '<h1 class="text-left">', '</h1>' ); ?>

            </header> <!-- .entry-header -->

            </a>

            </article>

            <?php endif; ?>

            <?php endwhile; ?>

<?php endif; ?>

<div class="row titulo-colecciones-home">

    <div class="col-12">
        <div class="text-center text-uppercase titulo">Artículos Recientes</div>
    </div>

  </div>

  <?php if (have_posts()) : ?>
    
    <?php 

    $args = array (
      'cat' => 5
    );

    query_posts($args) ?>

        <?php while (have_posts()) : the_post(); ?>

            <article>

            <div

            <?php if (has_post_thumbnail($post)): ?>
                class=""
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');
                       background-repeat: no-repeat;
                       background-size: cover;"
            >

            </div>

            <a href="<?php echo get_permalink(); ?>">

            <header>

                <?php the_title( '<h1 class="text-left">', '</h1>' ); ?>

            </header> <!-- .entry-header -->

            </a>

            </article>

            <?php endif; ?>

            <?php endwhile; ?>


    <?php endif; ?>

</div>

</div>
</div>

<?php get_footer(); ?>