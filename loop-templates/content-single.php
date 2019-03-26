<?php
$post = $wp_query->post;

if ( in_category( 'editorial' ) ) {
  include( TEMPLATEPATH.'/loop-templates/editorial.php' );
}
else {
  include( TEMPLATEPATH.'/loop-templates/single.php' );
}
?>
