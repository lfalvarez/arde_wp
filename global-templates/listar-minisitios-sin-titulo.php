<?php
/**
 * Aquí se listan los ministios.
 *
 * @package arde-tema
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="<?php echo esc_attr( $container ); ?>">
      <div class="row lista colecciones gt-america">

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

                <div class="card col-md-6 border-0 p-0">
                  <a href="<?php echo get_permalink(); ?>">
                    <p class="texto-listado-colecciones text-center text-uppercase minisitio-card-title"><?php the_title(); ?></p>
                    <p class="boton-listado-colecciones text-center">- Ver</p>
                    <div class="document-image-colecciones" style='background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?php if(has_post_thumbnail()){
                      the_post_thumbnail_url();
                    }
                    else {
                      echo bloginfo('template_url').'/img/arde-logo.png';
                    }
                    ?>")'>
                    </div>
                  </a>
                </div>

               <?php endwhile;
                 wp_reset_postdata();
                 else : ?>
                 <p>Aún sin minisitios, puedes crear una página y decirle que el template es MiniSitio</p>
            <?php endif; ?>

      </div>
</div>