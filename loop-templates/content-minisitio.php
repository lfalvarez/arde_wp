<?php
/**
 * Partial template for content in page.php
 *
 * @package arde-tema
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function tieneAlMenosUnaRRSS() {
    $social_networks = ["facebook", "twitter", "instagram", "link"];
    $tieneAlMenosUno = false;
                  
    foreach( $social_networks as $social_network ){
        $valor_para_rrss = get_post_custom_values( $social_network , $post->ID);
        if((bool) $valor_para_rrss) {
            $tieneAlMenosUno = true;
        }
    }
    return $tieneAlMenosUno;
}

$tieneAlMenosUno = tieneAlMenosUnaRRSS();
?>

<div class="row gt-america pb-5">
	<?php
	if($tieneAlMenosUno) {
	?>
		<div class="col-md-3 small pb-5 pb-md-0">
			<?php $social_network = 'link'; include(TEMPLATEPATH.'/global-templates/web-link.php'); ?>
	   		<?php $social_network = 'facebook'; include(TEMPLATEPATH.'/global-templates/social-link.php'); ?>
			<?php $social_network = 'twitter'; include(TEMPLATEPATH.'/global-templates/social-link.php'); ?>
	    		<?php $social_network = 'instagram'; include(TEMPLATEPATH.'/global-templates/social-link.php'); ?>
	    	</div>
	<?php 
	}
	?>
    <div class="col-<?php echo ($tieneAlMenosUno)?'9':'12';?>">
      <?php the_content(); ?>

      <!-- Custom field: Contacto Autor -->
      <?php $embed= get_post_meta($post->ID, "Contacto", true); //Llamo el CF de Contacto Autor ?>
      <?php if($embed !== '') { // Si tiene "Contacto Autor" mostrará algo ?>
          <a class="small" target="_blank" href="mailto:<?php $key="Contacto"; echo get_post_meta($post->ID, $key, true); ?>">Contactar a autores de los documentos ></a>
      <?php } else { // Si no tiene "Contacto Autor" mostrará nada ?>

      <?php } // Se cierra el condicional ?>      
    </div>

</div>

<div class="container-fluid border-ytb pr-0 pl-0 mb-5"> <!-- Sección Archivo Alpha -->
        <div class='row'>
            <div class="text-center col-12 mx-auto my-5">
                  <!-- Custom field: Link Archivo Omeka -->
                  <?php $embed= get_post_meta($post->ID, "Omeka", true); //Llamo el CF de Link a Omeka ?>
                  <?php if($embed !== '') { // Si tiene "Omeka" mostrará algo ?>
                      <h5>Ir al archivo completo de esta colección</h5>
                      <a class="small" target="_blank" href="<?php $key="Omeka"; echo get_post_meta($post->ID, $key, true); ?>">Archivo Alpha ></a>
                  <?php } else { // Si no tiene "Omeka" mostrará nada ?>

                  <?php } // Se cierra el condicional ?>
            </div>
        </div>
</div>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>
		<?php
		$slug = sanitize_title($post->post_title);
		$category = get_category_by_slug( $slug );

		$query = new WP_Query( array( 'cat' => $category->cat_ID ) );

		?>

    <?php  if ( $query->have_posts() ): ?>
      <div class ="row documentos-minisitio">
		      <?php while ( $query->have_posts() ) : $query->the_post(); ?>

          <div class="card col-md-4 border-0">

            <a href="<?= get_permalink(); ?>">
              <div class="document-image" style='background-image:url("<?php if(has_post_thumbnail()){
                the_post_thumbnail_url('large');
              }
              else {
                echo bloginfo('template_url').'/img/arde-logo.png';
              }
              ?>")'></div>
              <p class="card-text text-center"><?php the_title(); ?></p>
            </a>

          </div>

        <?php endwhile;
          wp_reset_postdata();
          ?>
    </div>
  <?php endif; ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
