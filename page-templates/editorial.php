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

    

    
                    
            <div

            <?php if (has_post_thumbnail($post)): ?>
                class="landing-image-editorial bg-minisitio-con-imagen"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');
                       background-repeat: no-repeat;
                       background-size: cover;"
            >

            <?php else : ?>

                 class="landing-image-editorial"

            </div>

            <?php endif; ?>

            <?php endwhile; ?>



    <?php endif; ?>

</div>

<?php get_footer(); ?>