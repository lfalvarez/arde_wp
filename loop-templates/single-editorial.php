<?php
/**
 * Single post partial template.
 *
 * @package arde-tema
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<div class="post-editorial row gt-america cuerpo-central">

	<div class="col-md-3">

		<p class="fecha-post pt-3"><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?></p>
		<p class="fecha-post pt-3">Escrito por <?php the_author(); ?></p>

	</div>


    <div class="col-md-9 entry-content offset-1">
		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>
      
    </div>

</div>

</article><!-- #post-## -->




