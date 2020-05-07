<?php
/**
 * Aquí se listan las galerías.
 *
 * @package arde-tema
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<div class="listado-galerias <?php echo esc_attr( $container ); ?> pb-5">
        <div class='row titulo-colecciones-home'>
            <div class="col-12">
                <div class="text-center text-uppercase titulo">Galerías</div>
                <p class="mx-auto bajada-titulos-inicio gt-america text-center">Muestras del archivo, o minisitios, que almacenan una exposición digital de un artista, grupo o tema.</p>
            </div>
        </div>

        <div class="arrow-btn flickity-enabled is-draggable" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false, "lazyLoad": 4 }' tabindex="0">


                  <?php
                      $args = array(
                          'post_type' => 'page',//it is a Page right?
                          'post_status' => 'publish',
                          'posts_per_page' => 6,
                          'meta_query' => array(
                              array(
                                  'key' => '_wp_page_template',
                                  'value' => 'page-templates/minisitiopage.php', // template name as stored in the dB
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
                        <div class="bajada-post mt-2 text-left small-70"><?php echo the_excerpt() ?></div>

                        </a>
                      </div>

                     <?php endwhile;
                       wp_reset_postdata();
                       else : ?>
                       <p>Aún sin minisitios, puedes crear una página y decirle que el template es MiniSitio</p>
                       <?php endif; ?>                  

        </div>

        <div class="ir-a-seccion col-md-12 border-0 text-right small"><a href="https://proyectoarde.org/galerias/">Ir a todas las galerías &gt;</a></div>

</div>
