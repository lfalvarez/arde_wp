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

	<div class="col-md-2 small">

		<p><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?></p>
		<p>Escrito por <?php the_author(); ?></p>

        <div class="post-share">
          Comparte
          <div class="share-links">
            <a class="popup facebook" target="_blank" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>">facebook</a>
            <a class="popup twitter"  target="_blank" href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Click to share this post on Twitter">twitter</a>
            <a class="popup google-plus"  target="_blank" href="https://plus.google.com/share?url=<?php the_permalink();?>">Google+</a>
          </div>
        </div>

	</div>


    <div class="col-md-8 entry-content">
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




