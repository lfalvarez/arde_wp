<?php
/**
 * Aquí se listan los ministios.
 *
 * @package arde-tema
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

<div class="container">
        <div class='row titulo-colecciones-home'>
            <div class="col-12">
                <div class="text-center text-uppercase titulo">Galerías</div>
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
                  </a>
                  <?php the_title( '<div class="card-body text-center">', '</div>' ); ?> <!-- titulo -->
                </div>



               <?php endwhile;
                 wp_reset_postdata();
                 else : ?>
                 <p>Aún sin minisitios, puedes crear una página y decirle que el template es MiniSitio</p>
                 <?php endif; ?>
                 
  </div>
</div>
