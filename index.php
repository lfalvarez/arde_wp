<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package arde-tema
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>	

<?php get_template_part( 'global-templates/listar-editorial' ); ?>

<?php get_template_part( 'global-templates/cita-1' ); ?>

<?php get_template_part( 'global-templates/listar-minisitios-huellas' ); ?>

<?php get_template_part( 'global-templates/listar-minisitios-carousel' ); ?>

<?php get_template_part( 'global-templates/cita-2' ); ?>

<?php get_footer(); ?>
