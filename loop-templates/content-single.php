<?php
$post = $wp_query->post;
//Perdoname señor jebus por romper el OpenClosedPrinciple
// pero no sé hacer esto =(
// y lo pillé en este link https://wordpress.stackexchange.com/questions/61915/custom-single-post-by-category
if ( in_category( 'editorial' ) ) {
  include( TEMPLATEPATH.'/loop-templates/single-editorial.php' );
}
elseif (in_category( 'sobre-archivos' )){
	include( TEMPLATEPATH.'/loop-templates/materiales.php' );
}
else {
  include( TEMPLATEPATH.'/loop-templates/single.php' );
}
?>
