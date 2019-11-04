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


<div class="row gt-america ml-md-3 ml-lg-0">
	<div class='col-md-1'>
		<!-- Facebook -->
		<a href="https://www.facebook.com/sharer/sharer.php?u=SHAREMESSAGE" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fab fa-facebook-f"></i></a>
		<!-- Google+ -->
		<a href="https://plus.google.com/share?url=SHAREMESSAGE" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fab fa-google-plus-g"></i></a>
	</div>
    <div class="col-md-11 entry-content">
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
