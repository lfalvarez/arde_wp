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

<div class="row gt-america">
	<div class="col-3 small">
		<?php $social_network = 'web'; include(TEMPLATEPATH.'/global-templates/social-link.php'); ?>
    <?php $social_network = 'facebook'; include(TEMPLATEPATH.'/global-templates/social-link.php'); ?>
		<?php $social_network = 'twitter'; include(TEMPLATEPATH.'/global-templates/social-link.php'); ?>
    <?php $social_network = 'instagram'; include(TEMPLATEPATH.'/global-templates/social-link.php'); ?>
    </div>
    <div class="col-9">
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


    <?php  if ( $query->have_posts() ): ?>
      <div class ="row documentos-minisitio">
		      <?php while ( $query->have_posts() ) : $query->the_post(); ?>

          <div class="card col-md-4 border-0">

            <a class="card-body" href="<? get_permalink(); ?>">
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
