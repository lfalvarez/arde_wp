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
$queryObject = new  Wp_Query( array(
    'showposts' => 5,
    'post_type' => array('post'),
    'category_name' => Editorial,
    'orderby' => 1,
    ));

// The Loop
if ( $queryObject->have_posts() ) :
    $i = 0;
    while ( $queryObject->have_posts() ) :
        $queryObject->the_post();
        if ( $i == 0 ) : ?>

            <div class="first-post">
            <a href="<?php the_permalink(); ?>" title="<?php printf(__( 'Read %s', 'wpbx' ), wp_specialchars(get_the_title(), 1)) ?>">
                <?php the_post_thumbnail('sidethumbs'); ?>
            </a>

        <?php endif;
        if ( $i != 0 ) : ?>

            <div class="secondary-post">

        <?php endif; ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>

        </a>
        </div>
        <?php $i++;
    endwhile;
endif; ?>

<?php get_footer(); ?>