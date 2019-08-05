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

	<header class="entry-header">

		<div class ="row">

		  <div class="card col-md-4 border-0">

		    <a href="<?= get_permalink(); ?>">
		      <div class="document-image" style='background-image:url("<?php if(has_post_thumbnail()){
		        the_post_thumbnail_url();
		      }
		      else {
		        echo bloginfo('template_url').'/img/arde-logo.png';
		      }
		      ?>")'></div>
		      <p class="card-text text-center"><?php the_title(); ?></p>
		    </a>

		  </div>

		</div>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
