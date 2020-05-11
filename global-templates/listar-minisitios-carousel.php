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

<div class="listado-galerias <?php echo esc_attr( $container ); ?> pb-5">
        <div class='row titulo-colecciones-home'>
            <div class="col-12">
                <div class="text-center text-uppercase titulo">Galerías</div>
                <p class="mx-auto bajada-titulos-inicio gt-america text-center">Exposición digital de las colecciones.</p>
            </div>
        </div>

        <div class="arrow-btn flickity-enabled is-draggable" data-flickity='{ "groupCells": 3, "cellAlign": "left", "pageDots": false, "lazyLoad": 4, "autoPlay": true }' tabindex="0">


                  <?php
                      $args = array(
                          'post_type' => 'page',//it is a Page right?
                          'post_status' => 'publish',
                          'posts_per_page' => 10,
                          'post_parent' => 38,
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
                            the_post_thumbnail_url('thumbnail');
                          }
                          else {
                            echo bloginfo('template_url').'/img/arde-logo.png';
                          }
                          ?>")'></div>
                        
                        <?php the_title( '<div class="text-left">', '</div>' ); ?> <!-- titulo -->
                        <div class="gt-america bajada-post mt-2 text-left small-70"><?php echo the_excerpt() ?></div>

                        </a>
                      </div>

                     <?php endwhile;?>
                       <?php endif; ?>                  

        </div>
        <div class="ir-a-seccion col-md-12 border-0 text-right small gt-america"><a href="https://proyectoarde.org/galerias/">Ir a todas las galerías &gt;</a></div>

</div>
