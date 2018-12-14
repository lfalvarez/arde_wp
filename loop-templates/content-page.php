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

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

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
         else : ?>
         <p>Aún sin contenido curado, puedes crear una entrada (post) y decirle que la categoría es <b><?php echo $category->name; ?></b></p>
         <?php endif; ?>



	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
