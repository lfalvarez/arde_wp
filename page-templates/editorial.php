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
    
    <?php query_posts("cat=5") ?>

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

            <?php while (have_posts()) : the_post(); ?>

            <div

            <?php if (has_post_thumbnail($post)): ?>
                
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');
                       background-repeat: no-repeat;
                       background-size: cover;"
            >

            </div>

    <?php endif; ?>

</div>

</div>
</div>

<?php get_footer(); ?>