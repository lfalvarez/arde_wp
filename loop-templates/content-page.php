<?php
/**
 * Partial template for content in page.php
 *
 * @package arde-tema
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="row">
	<div class="col">
		<?php $social_network = 'facebook'; include(TEMPLATEPATH.'/global-templates/social-link.php'); ?>
		<?php $social_network = 'instagram'; include(TEMPLATEPATH.'/global-templates/social-link.php'); ?>
    </div>
    <div class="col-8">
      <?php the_content(); ?>
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



		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" height= alt="<?php the_title(); ?>">
          <div class="card-body">
            <p class="card-text text-center"><?php the_title(); ?></p>
          </div>
        </div>

       <?php endwhile;
         wp_reset_postdata();
         ?>
         <?php endif; ?>



	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
