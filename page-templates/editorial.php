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
  'cat' => 5,
  'showposts' => 1
);

$query = new WP_query ( $args );
if ( $query->have_posts() ) {
 
}

?>

<?php while ( $query->have_posts() ) : $query->the_post(); ?>
    
<article>

<div <?php if ( has_post_thumbnail($post) );?>
                class="landing-image-editorial"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');
                       background-repeat: no-repeat;
                       background-size: cover;">


<a href="<?php echo get_permalink(); ?>">

<header>

    <?php the_title( '<h1 class="text-left">', '</h1>' ); ?>

</header> <!-- .entry-header -->

</a>

</div>

</article>

<?php

endwhile; // end first loop
rewind_posts();

?>

<div class="row titulo-colecciones-home">

    <div class="col-12">
        <div class="text-center text-uppercase titulo">Artículos Recientes</div>
    </div>

</div>

<?php

while ( $query->have_posts() ) : $query->the_post(); // start second loop for wordpress posts

if ( get_post_type( $post->ID ) == 'post' && $count == 1 ) { ?>

<article>
  
<a href="<?php echo get_permalink(); ?>">

<header>

    <?php the_title( '<h1 class="text-left">', '</h1>' ); ?>

</header> <!-- .entry-header -->

</a>

</article>

<?php } ?> 

<?php endwhile; // end second loop for wordpress ?>

<?php rewind_posts(); ?>

<?php get_footer(); ?>