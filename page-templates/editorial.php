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

<?php if (have_posts()) : ?>
    
    <?php query_posts("cat=5") ?>

        <?php while (have_posts()) : the_post(); ?>

    <div class="col-12">
                    
            <div

            <?php if (has_post_thumbnail($post)): ?>
                class="landing-image-editorial"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');
                       background-repeat: no-repeat;
                       background-size: cover;"
            >
            
         <?php else : ?>

         <?php endif; ?>

    </div>

    <?php endwhile; ?>

    <?php endif; ?>

<?php get_footer(); ?>