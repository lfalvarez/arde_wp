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


<div class="row gt-america">
	<div class="col-3 small">
		<?php $social_network = 'link'; include(TEMPLATEPATH.'/global-templates/web-link.php'); ?>
    <?php $social_network = 'facebook'; include(TEMPLATEPATH.'/global-templates/social-link.php'); ?>
		<?php $social_network = 'twitter'; include(TEMPLATEPATH.'/global-templates/social-link.php'); ?>
    <?php $social_network = 'instagram'; include(TEMPLATEPATH.'/global-templates/social-link.php'); ?>
    </div>
    <div class="col-9 entry-content">
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
