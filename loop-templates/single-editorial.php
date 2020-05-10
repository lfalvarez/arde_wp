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

<div class="post-editorial row cuerpo-central">

	<div class="col-md-2 small offset-md-1">

		<p class="mb-md-0 font-weight-bold">Escrito por <?php the_author(); ?></p>
		<p class="small"><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?></p>

        <div class="post-share mt-md-4">
          Comparte
          <div class="share-links">
            <a class="popup facebook" target="_blank" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>">facebook</a>
            <a class="popup twitter"  target="_blank" href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Click to share this post on Twitter">twitter</a>
          </div>
        </div>

	</div>


    <div class="col-md-8 entry-content gt-america">
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




