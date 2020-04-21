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
                    'posts_per_page' => 6,
                    'meta_query' => array(
                        array(
                            'key' => '_wp_page_template',
                        )
                    )
                );
            $query = new WP_Query($args);
            ?>
             <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                <div class="card col-md-4 border-0">

                  <a href="<?php echo get_permalink(); ?>">

                    <div class="document-image" style='background-image:url("<?php if(has_post_thumbnail()){
                      the_post_thumbnail_url();
                    }
                    else {
                      echo bloginfo('template_url').'/img/arde-logo.png';
                    }
                    ?>")'></div>
                  
                  <?php the_title( '<div class="text-left">', '</div>' ); ?> <!-- titulo -->
                  <div style="color: #b1b1b0;" class="mt-2 text-left small-70"><?php echo the_excerpt() ?></div>

                  </a>
                </div>

               <?php endwhile;
                 wp_reset_postdata();
                 else : ?>
                 <p>Aún sin minisitios, puedes crear una página y decirle que el template es MiniSitio</p>
                 <?php endif; ?>

                 <div class="card col-md-12 border-0 text-right small"><a href="https://proyectoarde.org/blog/">Ir a todos los contenidos del blog &gt;</a></div>
                 
  </div>
</div>
