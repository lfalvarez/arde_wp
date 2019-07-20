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
	<div class="row">
		<div class='col'>
			<h1 class="fs-24 text-uppercase mb-3"><?= get_the_title() ;?></h1>
		</div>
		<div class="w-100"></div>
		<div class='col d-none d-md-block'>
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
					<?php $category_detail=get_the_category($post->ID);//$post->ID
					$cd = $category_detail[0];
					$args = array(
							'post_type' => 'page',//it is a Page right?
							'post_status' => 'publish',
							'title' => $cd->cat_name,
							'meta_query' => array(
									array(
											'key' => '_wp_page_template',
											'value' => 'page-templates/minisitiopage.php', // template name as stored in the dB
									)
							)
					);
					$query = new WP_Query($args);
					$category_permalink = get_permalink($query->posts[0]->ID);
					?>
			    <li class="breadcrumb-item"><a href="<?= $category_permalink; ?>"><?= $cd->cat_name; ?></a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?= get_the_title() ;?></li>
			  </ol>
			</nav>
		</div>

	</div>

<!-- <?php if (has_post_thumbnail()): ?>

Thumbnail en Single<div class="jumbotron jumbotron-fluid image-jumbotron">
	<div class="container">
		<div class="row">
			<div class="col">
			  <?php echo get_the_post_thumbnail( $post->ID, 'large', array( 'class' => 'img-fluid rounded mx-auto d-block' )); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?> -->

<section style="visibility: hidden;" class="single-item">

    <?php the_content(); ?>

</section>

<section>

	<?php echo get_post_meta( $post->ID, 'Video', true ) ? get_post_meta( $post->ID, 'Video', true ) : '<div class="videoWrapper">content</div>'; ?>

</section>

<div class="row description-doc gt-america">
	<div class='col-md-1'>
		<!-- Facebook -->
		<a href="https://www.facebook.com/sharer/sharer.php?u=SHAREMESSAGE" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fab fa-facebook-f"></i></a>
		<!-- Google+ -->
		<a href="https://plus.google.com/share?url=SHAREMESSAGE" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fab fa-google-plus-g"></i></a>
	</div>
	<div class='col-md-3'>
		<?php $title = 'Autor'; include(TEMPLATEPATH.'/global-templates/documento-meta-data.php'); ?>
		<?php $title = 'Tipo de documento'; include(TEMPLATEPATH.'/global-templates/documento-meta-data.php'); ?>
		<?php $title = 'Fecha'; include(TEMPLATEPATH.'/global-templates/documento-meta-data.php'); ?>
	</div>
	<div class='col-md-8'>
		<?php $title = 'Descripción'; include(TEMPLATEPATH.'/global-templates/documento-meta-data.php'); ?>
	</div>
</div>

<!-- Slick -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

		$(".single-item").slick({
        infinite: true,
        fade: true,
        adaptiveHeight: true,
        accesibility: true,
        dots: true,
        adaptiveHeight: !0,
        speed: 0,
        swipe: !1,
        cssEase: "linear"
      });

</script>