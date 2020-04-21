<?php
/**
 * Aquí se listan la editorial.
 *
 * @package arde-tema
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="<?php echo esc_attr( $container ); ?>">
        <div class='row titulo-colecciones-home'>
            <div class="col-12">
                <div class="text-center text-uppercase titulo">Blog</div>
                <p class="bajada-titulos-inicio mx-auto gt-america text-center" style="font-size: 50%;">Acá podrás encontrar noticias, columnas, entrevistas, artículos y reportajes sobre archivos, artistas y sus documentos, arte y comunidad.</p>
            </div>
        </div>
      <div class="row lista-colecciones gt-america">

            <?php
                $args = array(
                    'post_type' => 'post',//it is a Page right?
                    'post_status' => 'publish',
                    'posts_per_page' => 3
                    )
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

                 <div class="card col-md-12 border-0 text-right small"><a href="https://proyectoarde.org/galerias/">Ir a todos los contenidos del blog &gt;</a></div>
                 
  </div>
</div>
