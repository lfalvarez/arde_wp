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


<?php

$args = array(
  'post_type' => array ('post'),
  'cat' => 5
);

$query = new WP_query ( $args );
if ( $query->have_posts() ) {
 
}

?>

<?php while ( $query->have_posts() ) : $query->the_post(); ?>
    
<article>

<div <?php if ( has_post_thumbnail($post) && $count == 0 );?>
                class="landing-image-editorial"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');
                       background-repeat: no-repeat;
                       background-size: cover;">

</article>

<?php

endwhile; // end first loop
rewind_posts();

?>

<a href="<?php echo get_permalink(); ?>">

<header>

    <?php the_title( '<h1 class="text-left">', '</h1>' ); ?>

</header> <!-- .entry-header -->

</a>

</div>

<div class="row titulo-colecciones-home">

    <div class="col-12">
        <div class="text-center text-uppercase titulo">Artículos Recientes</div>
    </div>

</div>

<?php get_footer(); ?>