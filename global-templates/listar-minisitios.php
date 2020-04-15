<?php
/**
 * Aquí se listan los ministios.
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
                <div class="text-center text-uppercase titulo">Galerías</div>
                <p class="gt-america text-center" style="font-size: 50%;">Breve descripción de la sección galerías</p>
            </div>
        </div>
      <div class="row lista-colecciones gt-america">

            <?php
                $args = array(
                    'post_type' => 'page',//it is a Page right?
                    'post_status' => 'publish',
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
                  
                  <?php the_title( '<div class="card-body text-center">', '</div>' ); ?> <!-- titulo -->
                  <div style="color: #b1b1b0;" class="text-left small"><?php echo the_excerpt() ?></div>

                  </a>
                </div>

               <?php endwhile;
                 wp_reset_postdata();
                 else : ?>
                 <p>Aún sin minisitios, puedes crear una página y decirle que el template es MiniSitio</p>
                 <?php endif; ?>

                 <div class="card col-md-12 border-0 text-right small"><a href="">Ir a todas las galerías &gt;</a></div>
                 
  </div>
</div>
