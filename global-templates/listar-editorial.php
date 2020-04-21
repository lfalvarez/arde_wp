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
      $query = new WP_Query
      (array(
                 'posts_per_page'   => 5,
             )
       );

       while ($query->have_posts()): $query->the_post(); ?>
      <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <p><?php the_excerpt(); ?></p>
     </li>
<?php endwhile;?>

                 <div class="card col-md-12 border-0 text-right small"><a href="https://proyectoarde.org/galerias/">Ir a todos los contenidos del blog &gt;</a></div>
                 
  </div>
</div>
