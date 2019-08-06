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

    <div class="proyectos col2 span_1_of_4">
                    
            <div class="proyectos-foto">

            <!-- Custom field: imagen -->
            <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <li class="imagen-proyecto" style="background: url('<?php the_post_thumbnail_url(); ?>'); background-repeat: no-repeat; background-size: contain; list-style:none; background-position: center;"></li>
                <li class="proyectos-titulo fs15 thin lh-15"><?php the_title(); ?></li>
                </a>
            <?php endif; ?>

            </div>
    
    </div>

    <?php endwhile; ?>
            
    <?php else : ?>

    <?php endif; ?>








<?php get_footer(); ?>