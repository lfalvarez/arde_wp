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

<div class="listado-editorial <?php echo esc_attr( $container ); ?>">
        <div class='row titulo-colecciones-home'>
            <div class="col-12">
                <div class="text-center text-uppercase titulo">Blog</div>
                <p class="bajada-titulos-inicio mx-auto gt-america text-center" style="font-size: 50%;">Acá podrás encontrar noticias, columnas, entrevistas, artículos y reportajes sobre archivos, artistas y sus documentos, arte y comunidad.</p>
            </div>
        </div>
      <div class="row lista-colecciones gt-america">

<?php
      $query = new WP_Query
      (array(
                 'posts_per_page'   => 1,
                 'cat' => 5
             )
       );

       while ($query->have_posts()): $query->the_post(); ?>
                <div class="card col-md-8 border-0">

                  <a href="<?php echo get_permalink(); ?>">

                    <div class="document-image" style='background-image:url("<?php if(has_post_thumbnail()){
                      the_post_thumbnail_url();
                    }
                    else {
                      echo bloginfo('template_url').'/img/arde-logo.png';
                    }
                    ?>")'></div>
                  
                  <?php the_title( '<div class="text-left">', '</div>' ); ?> <!-- titulo -->

                  <div class="mt-2 text-left small-70">

                  <?php echo the_excerpt() ?>

                  <p class="fecha-post pt-3"><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?> — escrito por <?php the_author(); ?></p>

                  </div>

                  </a>
                </div>
<?php endwhile;?>

<?php
      $query = new WP_Query
      (array(
                 'posts_per_page'   => 4,
                 'cat' => 5,
                 'offset' => 1
             )
       );

       while ($query->have_posts()): $query->the_post(); ?>
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

                  <div class="mt-2 text-left small-70">

                  <?php echo the_excerpt() ?>

                  <p class="fecha-post pt-3"><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?> — escrito por <?php the_author(); ?></p>

                  </div>

                  </a>
                </div>
<?php endwhile;?>

                 <div class="ir-a-seccion col-md-12 border-0 text-right small"><a href="https://proyectoarde.org/blog/">Ir a todos los contenidos del blog &gt;</a></div>
                 
  </div>
</div>
