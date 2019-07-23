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
      <div class="row lista colecciones">
        <div class="col-2">

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

                <div class="card" style="width: 18rem;">
                  <a href="<?php echo get_permalink(); ?>">
                      <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" height= alt="<?php the_title(); ?>">
                  </a>
                  <div class="card-body">
                    <a href="<?php echo get_permalink(); ?>"><p class="card-text text-center"><?php the_title(); ?></p></a>
                  </div>
                </div>

               <?php endwhile;
                 wp_reset_postdata();
                 else : ?>
                 <p>Aún sin minisitios, puedes crear una página y decirle que el template es MiniSitio</p>
                 <?php endif; ?>

        </div>

  </div>
</div>
