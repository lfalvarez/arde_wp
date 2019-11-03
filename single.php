<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( in_category('4') ) {
get_header('minisitio'); // 

} else {
get_header(); // use default header.php
}
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper documento" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">


				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>


</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
